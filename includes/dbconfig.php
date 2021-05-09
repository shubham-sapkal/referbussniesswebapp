<?php
    require __DIR__.'/vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    use Kreait\Firebase\Auth;

    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/referbussiness-4f39b-firebase-adminsdk-aysdo-15bf18c6a7.json');
    $firebase = (new Factory())
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri("https://referbussiness-4f39b-default-rtdb.firebaseio.com/")
        ->create();

    $database = $firebase -> getDatabase();

    // $database = $factory->createDatabase();

    // var_dump($database);

?>