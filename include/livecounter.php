<?
/* Copyright 2000 - M@rms (www.marms.com) Tous droits r�serv�s - Version 0.1*/

// nom d'utilisateur pour la base de donn�es
$nbc_login="root";
// mot de passe d'acc�s � la base de donn�es
$nbc_password="";
// Nom du serveur
$nbc_host="localhost";
// Nom de la base de donn�es
$nbc_db="wwwfunkystorm";
// Nom de la table
$nbc_table="live_counter";
// Temps en secondes au bout duquel un utilisateur est consid�r� d�connect�
$nbc_timeout=120;

function nbc(){
  global $REMOTE_ADDR, $nbc_table, $nbc_timeout, $nbc_host, $nbc_login, $nbc_password, $nbc_db;
  $db=new phpDB();
  $db->pconnect($nbc_host, $nbc_login, $nbc_password, $nbc_db) or die("Impossible de se connecter au serveur");

  $db->execute("DELETE FROM $nbc_table WHERE HeureLimite < now()");
  $res=$db->execute("SELECT count(*) FROM $nbc_table WHERE IP='$REMOTE_ADDR'");
  if($res->fields[0]){
// D�j� connect�
    $db->execute("UPDATE $nbc_table SET HeureLimite=HeureLimite + $nbc_timeout WHERE IP='$REMOTE_ADDR'");
  }else{
// Nouvelle connexion
    $db->execute("INSERT INTO $nbc_table (IP, HeureLimite) VALUES ('$REMOTE_ADDR', now()+ $nbc_timeout)");
  }
  $res->close();
  $res=$db->execute("SELECT count(*) FROM $nbc_table");
  $count=$res->fields[0];
  $res->close();
  return $count;
}

/*--------------------------------------------------------------------------------------

        Name: phpDB MySQL module
        Version: 1.02bR6
        Description: A PHP database wrapper for various database servers with a powerful
        Recordset for result data manipulation.  Database results are flushed automatically by phpDB.
        Author: Joe Thong
        Site URL: http://phpdb.linuxbox.com/
        Last Modified Date: 12/16/1999

        Copyright (c) Joe Thong Chean Fonk.
        All rights reserved.

        Redistribution and use in source and binary forms, with or without
        modification, are permitted provided that the following conditions
        are met:
        1. Redistributions of source code must retain the above copyright
           notice, this list of conditions and the following disclaimer.
        2. Redistributions in binary form must reproduce the above copyright
           notice, this list of conditions and the following disclaimer in the
           documentation and/or other materials provided with the distribution.
        3. All advertising materials mentioning features or use of this software
           must display the following acknowledgement:
                This product includes software developed by Joe Thong
                        and its contributors.
        4. Neither the name of the author nor the names of its contributors
           may be used to endorse or promote products derived from this software
           without specific prior written permission.

        THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS ``AS IS'' AND
        ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
        IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
        ARE DISCLAIMED.  IN NO EVENT SHALL THE REGENTS OR CONTRIBUTORS BE LIABLE
        FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
        DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS
        OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
        HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
        LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
        OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
        SUCH DAMAGE.

--------------------------------------------------------------------------------------*/

/*        define this module, to prevent double class declaration.        */
        if (!defined("_PHPDB_ABSTRACT_LAYER")) {
          define("_PHPDB_ABSTRACT_LAYER", 1 );
        }

/*--------------------------------------------------------------------------------------
         Class Name: phpDB
--------------------------------------------------------------------------------------*/

class phpDB {

        /*        public variables        */
        var $version = '1.02bR6';                /*        Version number of phpDB        */

        var $databaseType = '';                /*        This variable keeps what database type is going to be used.
                                                                        Current supported database server are MySQL, MSQL, SQL Server, and Sybase        */

        var $databaseName = '';                /*        Specifies which database is going to be used.        */

        var $hostname = '';                        /*        The hostname of the database server, port number is optional.
                                                                        e.g: "db.devNation.com"        */

        var $username = '';                        /*        The username which is used to connect to the database server. */

        var $password = '';                        /*        Password for the username.        */

        /*        private variables        */

        var $_queryIDList        = array();        /*        An array of executed querys.  For results cleanup purposes.        */

        var $_connectionID        = -1;        /*        The returned link identifier whenever a successful database connection is made.        */

        var $_errorMsg = '';        /*        A variable which was used to keep the returned last error message.  The value will
                                                                then returned by the errorMsg() function        */

        var $_queryID = -1;        /*        This variable keeps the last created result link identifier.                */

        var        $_isPersistentConnection = false;        /*        A boolean variable to state whether its a persistent connection or normal connection.        */

        var $_tempResultObj = '';        /*        Holds the newly created result object, returned via the execute() method.        */


        /*        A constructor function for the phpDB object.  When initializing, specify the dbType
                i.e: "mysql", "msql", "postgresql", "mssql", and "sybase"        */

        function phpDB($dbType = "mysql") {
                switch ($dbType) {
                        case "mysql":
                        case "msql":
                        case "postgresql":
                        case "mssql":
                        case "sybase":
                        case "informix":
                                $this->databaseType = $dbType;
                                break;
                        default:
                                return false;
                }
        }

        /*        Returns: A positive link identifier on success, or false on error.
                Connect to the server with the provided arguments. The connection to the server will be closed when the script
                terminates, unless close() function is called beforehand.         */

        function connect($argHostname = "", $argUsername = "", $argPassword = "", $argDatabaseName = "") {
                $boolDBSelected;
                if ($argHostname != "") {
                        $this->hostname = $argHostname;
                }
                if ($argUsername != "") {
                        $this->username = $argUsername;
                }
                if ($argPassword != "") {
                        $this->password = $argPassword;
                }
                if ($argDatabaseName != "") {
                        $this->databaseName = $argDatabaseName;
                }

                $this->_connectionID = @mysql_connect($this->hostname, $this->username, $this->password);

                if ($this->databaseName && $this->_connectionID) {
                        $boolDBSelected = @mysql_select_db($this->databaseName);
                        if(!$boolDBSelected) {        /*        If DB selection fails        */
                                @mysql_close($this->_connectionID);        /*        Close the current connection        */
                                return false;
                        }
                }
                return $this->_connectionID;
        }

        /*        Returns: A positive link identifier on success, or false on error.
                Connect to the server with the provided arguments. The connection to the server will not be closed when the
                script terminates. Instead it will be kept for later future use.        */

        function pconnect($argHostname = "", $argUsername = "", $argPassword = "", $argDatabaseName = "") {
                $boolDBSelected;
                if ($argHostname != "") {
                        $this->hostname = $argHostname;
                }
                if ($argUsername != "") {
                        $this->username = $argUsername;
                }
                if ($argPassword != "") {
                        $this->password = $argPassword;
                }
                if ($argDatabaseName != "") {
                        $this->databaseName = $argDatabaseName;
                }

                $this->_connectionID = @mysql_pconnect($this->hostname, $this->username, $this->password);
                if ($this->_connectionID) {
                        $this->_isPersistentConnection = true;
                }

                if ($this->databaseName && $this->_connectionID) {
                        $boolDBSelected = @mysql_select_db($this->databaseName);
                        if(!$boolDBSelected) {        /*        if DB selection fails        */
                                return false;        /*        Persistent connection can't be closed        */
                        }
                }
                return $this->_connectionID;
        }

        /*        Returns: true on success, false on error
                Select the database name to be used        */

        function selectDB($dbName) {
                $this->databaseName = $dbName;
                if ($this->_connectionID) {
                        return @mysql_select_db($dbName);
                }
                else {
                        /*        No database selected        */
                        return false;
                }
        }

        /*        Returns: the Recordset object disregard success or failure
                Send the sql statement to the database server.        */

        function execute($sql = "") {
                $this->_queryID = @mysql_query($sql, $this->_connectionID);
                /*        Instantiate an object without considering whether the query return any results or not.        */
                $this->_tempResultObj = new Recordset($this->_queryID);
                $this->_insertQuery($this->_queryID);
                return $this->_tempResultObj;
        }

        /*        Returns: the last error message from previous database operation        */

        function errorMsg() {
                $this->_errorMsg = @mysql_error($this->_connectionID);
            return $this->_errorMsg;
        }

        /*        Returns: true on success, false on failure
                Close the database connection.        */

        function close() {
                if ($this->_queryIDList && sizeof($this->_queryIDList > 0)) {
                        while(list($_key, $_resultID) = each($this->_queryIDList)) {
                                @mysql_free_result($_resultID);
                        }
                }
                if ($this->_isPersistentConnection != true) {        /*        If its not a persistent connection,
                                                                                                                        then only the connection needs to be closed        */
                        return @mysql_close($this->_connectionID);
                }
                else {
                        return true;
                }
        }

        /*        A PRIVATE function used by the constructor function of the query object.  insert
                the successful returned query id to the query id list.  Used for later
                results cleanup.  A private function that's never meant to be used directly.        */

        function _insertQuery($query_id) {
                $this->_queryIDList[] = $query_id;
        }
}

/*--------------------------------------------------------------------------------------
         Class Name: Recordset
--------------------------------------------------------------------------------------*/

class Recordset {
        /*        public variables        */

        var $fields;

        var $BOF = null;        /*        indicates that the current record position is before the first record in a Recordset object.        */

        var $EOF = null;        /*        indicates that the current record position is after the last record in a Recordset object.         */

        /*        private variables        */

        var $_numOfRows = -1;        /*        NEVER change the value!  READ-ONLY!        */

        var $_numOfFields = -1;        /*        NEVER change the value!  READ-ONLY!        */

        var $_tempResult = '';        /*        Holds anything that was returned from the database specific functions.        */

        var $_queryID = -1;        /*        This variable keeps the result link identifier.        */

        var $_currentRow = -1;        /*        This variable keeps the current row in the Recordset.        */

        /*        Returns: query id on success and false if failed
                Constructor function        */

        function Recordset($queryID) {
                $this->_queryID = $queryID;
                if ($queryID) {
                        $this->_numOfRows = @mysql_num_rows($this->_queryID);
                        $this->_numOfFields = @mysql_num_fields($this->_queryID);
                }
                else {
                        $this->_numOfRows = 0;
                        $this->_numOfFields = 0;
                }
                if ($this->_numOfRows > 0 && $this->_currentRow == -1) {        /*        If result set contains rows        */
                        $this->_currentRow = 0;
                        $this->fields = @mysql_fetch_array($this->_queryID);
                        $this->EOF = false;
                        $this->BOF = false;
                }
                 return $this->_queryID;
        }

        /*        Returns: true if successful, false if fail
                Set the Recordset pointer to a specified field offset. If the next call to fetchField() won't include a field offset, this
                field would be returned.        */

        function fieldSeek($fieldOffset = -1) {
                $this->_tempResult = @mysql_field_seek($this->_queryID, $fieldOffset);
                return $this->_tempResult;
        }

        /*        Returns: an object containing field information.
                Get column information in the Recordset object. fetchField() can be used in order to obtain information about
                fields in a certain query result. If the field offset isn't specified, the next field that wasn't yet retrieved by
                fetchField() is retrieved.        */

        function fetchField($fieldOffset = -1) {
                if ($fieldOffset != -1) {
                        $this->_tempResult = @mysql_fetch_field($this->_queryID, $fieldOffset);
                }
                else if ($fieldOffset == -1) {        /*        The $fieldOffset argument is not provided thus its -1         */
                        $this->_tempResult = @mysql_fetch_field($this->_queryID);
                }
                return $this->_tempResult;
        }

        /*        Returns: true if there still rows available, or false if there are no more rows.
                Moves to the next row in a specified Recordset object and makes that record the current row
                and the data corresponding to the row will be retrieved into the fields collection.
                Note: Unlike the moveRow() method, when _currentRow is getNumOfRows() - 1, EOF will immediately be true.
                If row number is not provided, the function will point to the first row automatically.        */

        function nextRow() {
                if ($this->getNumOfRows() > 0) {
                        $this->fields = array();
                        $this->_currentRow++;
                        $this->fields = @mysql_fetch_array($this->_queryID);
                        if ($this->fields) {        /*        This is not working.  True all the time        */
                                $this->_checkAndChangeEOF($this->_currentRow - 1);
                                return true;
                        }
                }
                $this->EOF = true;
                return false;
        }

        /*        Returns: true on success, false on failure
                moveRow() moves the internal row pointer of the Recordset object to point to the specified row number
                and the data corresponding to the row will be retrieved into the fields collection.
                If row number is not provided, the function will point to the first row automatically.        */

        function moveRow($rowNumber = 0) {
                if ($rowNumber == 0) {
                        return $this->firstRow();
                }
                else if ($rowNumber == ($this->getNumOfRows() - 1)) {
                        return $this->lastRow();
                }
                if ($this->getNumOfRows() > 0 && $rowNumber < $this->getNumOfRows()) {
                        $this->fields = null;
                        $this->_currentRow = $rowNumber;
                        if(@mysql_data_seek($this->_queryID, $this->_currentRow)) {
                                $this->fields = @mysql_fetch_array($this->_queryID);
                                if ($this->fields) {        /*        This is not working.  True all the time        */
                                        $this->EOF = false; /*        No need to call _checkAndChangeEOF() because the possibility of moving to the last row has been handled by the above code.        */
                                        return true;
                                }
                        }
                }
                $this->EOF = true;
                return false;
        }

        /*        Returns: true on success, false on failure
                firstRow() moves the internal row pointer of the Recordset object to the first row
                and the data corresponding to the row will be retrieved into the fields collection.        */

        function firstRow() {
                if ($this->getNumOfRows() > 0) {
                        $this->fields = array();
                        $this->_currentRow = 0;
                        if (@mysql_data_seek($this->_queryID, $this->_currentRow)) {
                                $this->fields = @mysql_fetch_array($this->_queryID);
                                $this->EOF = false;
                                if ($this->fields) {        /*        This is not working.  True all the time        */
                                        return true;
                                }
                        }
                }
                $this->EOF = true;
                return false;
        }

        /*        Returns: true on success, false on failure
                lastRow() moves the internal row pointer of the Recordset object to the last row
                and the data corresponding to the row will be retrieved into the fields collection.        */

        function lastRow() {
                if ($this->getNumOfRows() > 0) {
                        $this->fields = array();
                        $num_of_rows = $this->getNumOfRows();
                        $this->_tempResult = @mysql_data_seek($this->_queryID, --$num_of_rows);
                        if ($this->_tempResult) {
                                $this->_currentRow = $num_of_rows;        /*        $num_of_rows decemented at above         */
                                $this->fields = @mysql_fetch_array($this->_queryID);
                                if ($this->fields) {        /*        This is not working.  True all the time        */
                                        $this->EOF = false;        /*        Special case for making EOF false.        */
                                        return true;
                                }
                        }
                }
                $this->EOF = true;
                return false;
        }

        /*        close() only needs to be called if you are worried about using too much memory while your script
                is running. All associated result memory for the specified result identifier will automatically be freed.        */

        function close() {
                $this->_tempResult = @mysql_free_result($this->_queryID);
                return $this->_tempResult;
        }

        /*        Returns: the number of rows in a result set.
        Get number of rows in result.        */

        function getNumOfRows() {
                return $this->_numOfRows;
        }

        /*        Returns: the number of fields in a result set.
        Get number of fields in result.        */

        function getNumOfFields() {
                return $this->_numOfFields;
        }

        /*        Check and change the status of EOF.        */
        function _checkAndChangeEOF($currentRow) {
                if ($currentRow >= ($this->_numOfRows - 1)) {
                        $this->EOF = true;
                }
                else {
                        $this->EOF = false;
                }
        }
}
?>