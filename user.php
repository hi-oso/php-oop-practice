<?php

class User
{
    public string $name;
    public int $age;
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce(): string
    {
        return "こんにちは、私の名前は" . $this->name . "です。 " . $this->age . "歳です。<br>";
    }
    public function isAdult(): bool
    {
        return $this->age >= 18;
    }
}

$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

echo "<h1>ユーザー管理プログラム</h1><br>";

echo "<h2>自己紹介</h2><br>";

echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();

echo "<h2>成人判定</h2><br>";

if ($user1->isAdult()) {
    echo $user1->name . "さんは成人です。<br>";
} else {
    echo $user1->name . "は未成年です。<br>";
}
if ($user2->isAdult()) {
    echo $user2->name . "さんは成人です。<br>";
} else {
    echo $user2->name . "は未成年です。<br>";
}
if ($user3->isAdult()) {
    echo $user3->name . "さんは成人です。<br>";
} else {
    echo $user3->name . "は未成年です。<br>";
}
?>