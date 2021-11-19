<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Fill this In!!!! </title>
    <meta name="author" content="Wendi Jollymore" />
</head>

<body>
    <h1> html </h1>
    <?php
class Student
{

    protected $firstName;
    protected $lastName;
    // etc.

    /**
     * Constructor
     */
    public function __construct() {
        // allocate your stuff
    }

    /**
     * Static constructor / factory
     */
    public static function create() {
        return new self();
    }

    /**
     * FirstName setter - fluent style
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * LastName setter - fluent style
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

}

// create instance
$student= Student::create()->setFirstName("John")->setLastName("Doe");

// see result
var_dump($student);
    ?>
</body>

</html>