<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_admin".
 *
 * @property int $kode_admin
 * @property string|null $tanggal
 * @property string|null $nama_admin
 * @property string|null $username
 * @property string|null $password
 * @property string|null $telepon
 * @property string|null $email
 * @property string|null $status
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['status'], 'string'],
            [['nama_admin'], 'string', 'max' => 30],
            [['username', 'password'], 'string', 'max' => 25],
            [['telepon'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_admin' => 'Kode Admin',
            'tanggal' => 'Tanggal',
            'nama_admin' => 'Nama Admin',
            'username' => 'Username',
            'password' => 'Password',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }


public static function findIdentity($kode_admin)
    {
        return isset($users[$kode_admin]) ? new static($users[$kode_admin]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach ($users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
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
        $sql = "select * from tb_admin where username = '$username'";
        $users = \Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
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
        return $this->authKey === $this->authKey;
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
