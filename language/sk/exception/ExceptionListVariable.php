<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      02.03.2019 23:00
*  @File          language/sk/ExceptionListVariable.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/


namespace language\sk\exception;



class ExceptionListVariable
{
    /**
     * @var $exceptionList
     */
    public $exceptionList;

    /**
     * @var $exceptionSqlManager
     */
    public $exceptionSqlManager;

    /**
     * @var $exceptionListGlobal
     */
    public $exceptionListGlobal;

    /**
     * @var $exceptionListUsers
     */
    public $exceptionListUsers;


    /**
     * ExceptionListVariable constructor.
     */
    function __construct()
    {
        // Initializable variable data...
        $this->exceptionSqlManager = array(
            // Starting
            'EXCEPTION_ERROR_CODE_10010'                                            => '10010',
            'EXCEPTION_ERROR_MESSAGE_10010'                                         => 'Nastala neočakávaná chyba pri spracovaní požiadavky pre SQL server. Kód chyby [ 10010 ]',
            'EXCEPTION_ERROR_LINK_10010'                                            => '///10010///',
            'EXCEPTION_ERROR_CODE_10012'                                            => '10012',
            'EXCEPTION_ERROR_MESSAGE_10012'                                         => 'Kód chyby [ 10012 ], Prosím skontrolujte funkciu Sqlmanager->setRowCountId(id). Či je nastavená v správnom tvare. ',
            'EXCEPTION_ERROR_LINK_10012'                                            => '///10012///',
            'EXCEPTION_ERROR_CODE_10014'                                            => '10014',
            'EXCEPTION_ERROR_MESSAGE_10014'                                         => 'Kód chyby [ 10014 ], Parameter ( idColumn ) nie je nastavený. Prosím nastavte daní parameter, inak funkcia nebude správne pracovať. ',
            'EXCEPTION_ERROR_LINK_10014'                                            => '///10014///',
            'EXCEPTION_ERROR_CODE_10020'                                            => '10020',
            'EXCEPTION_ERROR_MESSAGE_10020'                                         => 'Nastala neočakávaná chyba pri spracovaní požiadavky pre SQL server. Kód chyby [ 10020 ]',
            'EXCEPTION_ERROR_LINK_10020'                                            => '///10020///',
            'EXCEPTION_ERROR_CODE_10022'                                            => '10022',
            'EXCEPTION_ERROR_MESSAGE_10022'                                         => 'Kód chyby [ 10022 ], Prosím skontrolujte funkciu Sqlmanager->setRowFirstValue(column). Či je nastavená v správnom tvare. ',
            'EXCEPTION_ERROR_LINK_10022'                                            => '///10022///',
            'EXCEPTION_ERROR_CODE_10024'                                            => '10024',
            'EXCEPTION_ERROR_MESSAGE_10024'                                         => 'Kód chyby [ 10024 ], Parameter ( firstColumn ) nie je nastavený. Prosím nastavte daní parameter, inak funkcia nebude správne pracovať. ',
            'EXCEPTION_ERROR_LINK_10024'                                            => '///10024///',
            'EXCEPTION_ERROR_CODE_10030'                                            => '10030',
            'EXCEPTION_ERROR_MESSAGE_10030'                                         => 'Nastala neočakávaná chyba pri spracovaní požiadavky pre SQL server. Kód chyby [ 10030 ]',
            'EXCEPTION_ERROR_LINK_10030'                                            => '///10030///',
            'EXCEPTION_ERROR_CODE_10032'                                            => '10032',
            'EXCEPTION_ERROR_MESSAGE_10032'                                         => 'Kód chyby [ 10032 ], Vstupný parameter je nulový. Prosím skontrolovať volanie funkcii. ',
            'EXCEPTION_ERROR_LINK_10032'                                            => '///10032///',
            'EXCEPTION_ERROR_CODE_10034'                                            => '10034',
            'EXCEPTION_ERROR_MESSAGE_10034'                                         => 'Kód chyby [ 10034 ], Parameter vo funkcii Sqlmanager->setRowFirstValue(lastColumn) nie je nastavený. Prosím nastavte daní parameter, inak funkcia nebude správne pracovať.',
            'EXCEPTION_ERROR_LINK_10034'                                            => '///10034///',
        );
        // Initializable exception for users
        $this->exceptionListUsers = array(
            'EXCEPTION_USERS_ERROR_CODE_10010'                                      => '10010',
            'EXCEPTION_USERS_ERROR_MESSAGE_10010'                                   => 'Nastala neočakávaná chyba pri spracovaní požiadavky pre SQL server. Kód chyby [ 10010 ]',
            'EXCEPTION_USERS_ERROR_LINK_10010'                                      => '///10010///',
            'EXCEPTION_USERS_ERROR_CODE_10011'                                      => '10011',
            'EXCEPTION_USERS_ERROR_MESSAGE_10011'                                   => 'Kód chyby [ 10011 ], Parameter ( $phone ) nie je nastavený. Prosím nastavte daní parameter, inak funkcia nebude správne pracovať. ',
            'EXCEPTION_USERS_ERROR_LINK_10011'                                      => '///10011///',
            'EXCEPTION_USERS_ERROR_CODE_10020'                                      => '10020',
            'EXCEPTION_USERS_ERROR_MESSAGE_10020'                                   => 'Nastala neočakávaná chyba pri spracovaní požiadavky pre SQL server. Kód chyby [ 10020 ]',
            'EXCEPTION_USERS_ERROR_LINK_10020'                                      => '///10020///',
            'EXCEPTION_USERS_ERROR_CODE_10022'                                      => '10022',
            'EXCEPTION_USERS_ERROR_MESSAGE_10022'                                   => 'Nastala neočakávaná chyba pri spracovaní požiadavky pre SQL server. Kód chyby [ 10022 ]',
            'EXCEPTION_USERS_ERROR_LINK_10022'                                      => '///10022///',
            'EXCEPTION_USERS_ERROR_CODE_10024'                                      => '10024',
            'EXCEPTION_USERS_ERROR_MESSAGE_10024'                                   => 'Kód chyby [ 10024 ], Vstupný parameter je nulový. Prosím skontrolovať volanie funkcii.',
            'EXCEPTION_USERS_ERROR_LINK_10024'                                      => '///10024///',
            'EXCEPTION_USERS_ERROR_CODE_10026'                                      => '10026',
            'EXCEPTION_USERS_ERROR_MESSAGE_10026'                                   => 'Nastala neočakávaná chyba pri spracovaní požiadavky pre SQL server. Kód vyjimky [ 10026 ]',
            'EXCEPTION_USERS_ERROR_LINK_10026'                                      => '///10026///',
        );
    }
}
?>