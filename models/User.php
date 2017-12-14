<?php

namespace app\models;

use Yii;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $id_user_role
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    public $auth_key;
    public $access_token;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'id_user_role'], 'required'],
            [['id_user_role'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'id_user_role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    public function getRole()
    {
        if ($this->id_user_role === UserRole::ROLE_ADMIN) {
            return 'Admin';
        } else {
            return 'Pegawai';
        }
    }

    public static function isAdmin()
    {
        if(isset(Yii::$app->user->identity->id)){
            return true;
        } else{
            return false;
        }
    }

    public static function getRoleList()
    {
        return [
            UserRole::ROLE_ADMIN => 'Admin',
            UserRole::ROLE_PEGAWAI => 'Pegawai',
        ];
    }
}
