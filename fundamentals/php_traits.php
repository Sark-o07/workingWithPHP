<?php
// Traits in PHP allow you to reuse methods across multiple classes without using inheritance.\n
// Traits are similar to classes, but they are intended to group functionality in a fine-grained way.\n
// Traits can contain methods and properties, and they can be used in classes to add functionality.\n
// Traits are a way to achieve code reuse in PHP without the limitations of single inheritance.\n

trait message1 {
    public function msg1() {
        return "OOP is fun!\n";
    }

    public function msg2() {
        return "OOP reduces duplication of code.\n";
    }
}

trait message2 {
    public function msg3() {
        return "OOp allows for code reusability.\n";
    }
    public $var1 = "OOP is powerful!\n";
}


class Welcome {
    use message1, message2;
}


$welcome = new Welcome();

echo $welcome->var1;
echo $welcome->msg1();
echo $welcome->msg2();
echo $welcome->msg3();