<?

namespace App\Model;

use App\Core\Model;

abstract class User extends Personne
{
    protected string $login;
    protected string $passWord;

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of passWord
     */
    public function getPassWord()
    {
        return $this->passWord;
    }

    /**
     * Set the value of passWord
     *
     * @return  self
     */
    public function setPassWord($passWord)
    {
        $this->passWord = $passWord;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
    public static function findAll(): array
    {
        $sql = "select * from " . self::table() . " where role not like 'ROLE_PROFESSEUR";
        echo $sql;
        return  [];
    }
    public static function findUserByLoginAndPassword(string $login, string $passWord)
    {
        self::findBy("select from personne where login=? and password=?", [$login, $passWord], true);
    }
}
