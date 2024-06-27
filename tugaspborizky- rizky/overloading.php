<?php

class Zero {
    
    public $name = "damsik";
    public $umur = 20;

    // function __get()
    public function __get($name) {

        echo "nama saya $this->name";

    }

    // funtion __set()
    public function __set($name, $asal) {
        
        echo "nama saya $name saya dari $asal";
    }
}

$myobjek = new Zero();


?>
<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Zero {
    
    public $name = "damsik";
    public $umur = 20;

    // function __get()
    public function __get($name) {

        echo "nama saya $this->name";

    }

    // funtion __set()
    public function __set($name, $umur) {
        $name = $this->name;
        $umur = $this->umur;
        
        echo "nama saya $name saya dari $umur";
    }
}

$myobjek = new Zero();

$myobjek->alamat;

$myobjek->dani = "dondo";
        </code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content"><?= $myobjek->alamat ?><br><?= $myobjek->dani = "dondo" ?>
    </code></pre>
    </div>

<?php include 'footer.php'; ?>