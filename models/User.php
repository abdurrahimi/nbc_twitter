<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    //public $id;
    public $username;
    public $password;
	public $kode_admin;
	public $tanggal;
	public $nama_admin;
	public $telepon;
	public $email;
	public $status;
    public $authKey;
    public $accessToken;


    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin111',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($kode_admin)
    {
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        $user = Admin::findOne($kode_admin);
        if(isset($user)){
            return new static ($user);
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        /*foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }*/

        $users = Admin::find()->where(['accessToken'=>$token])->one();
        
            if ($users === $token) {
                return new static($user);
            }
        
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
		/*$sql = "select * from tb_admin where username = '$username'";
		$users = \Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }*/
        $user = Admin::find()->where(['username'=>$username])->one();
        //var_dump ($user); exit;
        if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->kode_admin;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        
        return $this->password === $password;
    }
}
