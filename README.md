Those files are located in the extensions/ directory from the root project.


For this project to work, you need some changes in the next files:

* LocalSettings.php - add the next line ```wfLoadExtension( 'CurrencyExchange' );``` 

* autoload.php - add the next line ```'CurrencyExchange' => __DIR__ . '/extensions/CurrencyExchange/CurrencyExchange.php',```

Also, check if the extension is available in the Special:Versions section like below before trying to use it.

![alt text](https://user-images.githubusercontent.com/72436614/229586865-83063982-4a4b-4567-8be6-717bf5a377dc.PNG)


For the currency exchange rates I used an public API from https://apilayer.com/marketplace.
