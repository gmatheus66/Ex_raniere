include 'init.php'


$email = post('email');
$senha = post('senha');


$users = file('csv/dados.csv');
foreach($users as $user) {
    $userData = explode(',', $user);
    if (trim($userData[2]) == $email && trim($userData[3]) == md5($senha)) {
        login($userData[0], $userData[2]);
        break;
    }
}