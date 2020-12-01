<?php

/*
|--------------------------------------------------------------------------
| General Configuration
|--------------------------------------------------------------------------
*/

// The full path to a local node install
$pool_config['node_path'] = '/var/www/node';

// The access URL for node
$pool_config['node_url'] = 'http://23.92.65.72/';

// The maximum deadline that is allowed for pool miners
$pool_config['max_deadline'] = 6800;

/*
|--------------------------------------------------------------------------
| Database Configuration
|--------------------------------------------------------------------------
*/

// The database DSN
$pool_config['db_connect'] = 'mysql:host=127.0.0.1;dbname=pool';

// The database username
$pool_config['db_user'] = 'root';

// The database password
$pool_config['db_pass'] = 'Linuxdistro&84';

/*
|--------------------------------------------------------------------------
| Mining Configuration
|--------------------------------------------------------------------------
*/

// The pool public key
$pool_config['public_key'] = 'PZ8Tyr4Nx8MHsRAGMpZmZ6TWY63dXWSCworn17gwq3phD49svFCvC7qoAFE4tamjsMKGjXpsxa6wd6XRKZSJBv8xxj37hCaus2qXG65pnaHv61DShsL6SQza';

// The pool private key
$pool_config['private_key'] = 'Lzhp9LopCG5MBQAmxJaz9LngpVtZ5FdGAGPfwXkY6iLQpMGb9rkaDLMqPufcUggLCpoRV1dSAx7bQ22coWfepjPULVgFHkuFRCnWeYpTwLePPciXZGfa3PPp2pvLDddQRgKyeNNKrtQCsAcasfRhjWLDufzGLqf1x';

// The pool wallet address
$pool_config['address'] = '3VnCmWyLQb8f1XhkQv4fiB1CrGewityDDteNtQwhMu3DjBuaDmUWbPMkPnbSaJPcbGrrJi1zkCHDXd4fGtTUeej3';

// The pool fee wallet address
$pool_config['fee_address'] = '3VnCmWyLQb8f1XhkQv4fiB1CrGewityDDteNtQwhMu3DjBuaDmUWbPMkPnbSaJPcbGrrJi1zkCHDXd4fGtTUeej3';

// The fee that the pool takes from the funds (default is 2%)
$pool_config['fee'] = 0.02;

/*
|--------------------------------------------------------------------------
| Payments Configuration
|--------------------------------------------------------------------------
*/

// The percentage to reward to historic shares (default is 100%)
$pool_config['historic_reward'] = 100;

// The percentage to reward to current shares (default is 0%)
$pool_config['current_reward'] = 100;

// The percentage to reward to the block winner (default is 0%)
$pool_config['miner_reward'] = 100;

// The minimum payout that is required
$pool_config['min_payout'] = 8;
