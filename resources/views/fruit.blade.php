<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Fill this In!!!! </title>
    <meta name="author" content="Wendi Jollymore" />
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $(".post").on("click", function(event) {
        console.log("click");
    });
});
</script>

<body>
    <h1> html </h1>
    <?php
    //    phpinfo();
    echo "<h2>This is another page</h2>\n";
    echo "<p>Not very exciting, yet.</p>\n";
    echo 'app name is ' . config('app.name', "sw");
    echo ' app file is ' . config('app.file', "defaultfile");
    echo '<br />';
    echo ' app title is ' . $title;
    echo '<br />';

    class Student
    {
        public function __construct()
        {
            // allocate your stuff
        }

        public static function withID($id)
        {
            $instance = new self();
            $instance->loadByID($id);
            return $instance;
        }

        public static function withRow(array $row)
        {
            $instance = new self();
            $instance->fill($row);
            return $instance;
        }

        protected function loadByID($id)
        {
            // do query
            // $row = my_awesome_db_access_stuff($id);
            // $this->fill($row);
        }

        protected function fill(array $row)
        {
            // fill all properties from array
        }
    }

    class Fruit
    {
        // Properties
        public $name;
        public $color;

        function __construct()
        {
        }

        public static function create($name, $color)
        {
            $instance = new self();
            $instance->set_name($name);
            $instance->set_color($color);
            return $instance;
        }
        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }

        function set_color($color)
        {
            $this->color = $color;
        }

        function get_name()
        {
            return $this->name;
        }
        function get_color()
        {
            return $this->color;
        }
    }

    class SummerFruit extends Fruit
    {

        function __construct($name)
        {
            Fruit::set_name($name);
            // $this->set_name($name);
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $orange = Fruit::create('Orange', 'orangeColor');
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    $summerFruit = new SummerFruit('summer fruit name');
    // echo $summerFruit::get_name(); // Non-static method Fruit::get_name() cannot be called statically 
    echo $summerFruit->get_name();
    echo '<br/>';

    echo $apple->get_name();
    echo "<br>";
    echo $orange->get_name();
    echo "<div class='post'><button>Click me</button></div>";
    echo $orange->get_color();

    $raw = '22. 11. 1968';
    $start = DateTime::createFromFormat('d. m. Y', $raw);

    echo 'Start date: ' . $start->format('Y-m-d') . PHP_EOL;

    $grade = array("jim" => 100, "andy" => 20);
    echo $grade['jim'];

    ?>

    <script src="{{ URL::to('resources/js/app.js') }}"></script>
</body>

</html>