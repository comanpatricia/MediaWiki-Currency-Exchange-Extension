Those files are located in the extension/ directory from the root project.

For this project to work, you need some changes in the next files:
[] LocalSettings.php - add the next line ```wfLoadExtension( 'CurrencyExchange' );``` 
[] autoload.php - add the next line ```'CurrencyExchange' => __DIR__ . '/extensions/CurrencyExchange/CurrencyExchange.php',```


For the currency exchange rates I used an public API from https://apilayer.com/marketplace.
