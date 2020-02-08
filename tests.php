<?php

error_reporting(E_ALL);
include ('api/autoloader.php');

define('OK', ' [OK]' . PHP_EOL);
define('ERR', ' [FAIL]' . PHP_EOL);

if (ubRouting::optionCliCheck('run', false)) {
    $dumpFlag = ubRouting::optionCliCheck('dump', false) ? true : false;

    /**
     * Models creation
     */
    $todo = new NyanORM('todo');
    $magicTodo = new nya_todo();

    if (is_object($todo)) {
        print('Normal model creation:' . OK);
    } else {
        print('Normal model creation:' . ERR);
    }

    if (is_object($magicTodo)) {
        print('Magic model creation:' . OK);
    } else {
        print('Magic model creation:' . ERR);
    }

    /**
     * Data selection
     */
    $allTodos = $todo->getAll();

    if (is_array($allTodos)) {
        print('Model data selection:' . OK);
    } else {
        print('Model data selection:' . ERR);
    }
    if (!empty($allTodos)) {
        print('Not empty data received:' . OK);
    } else {
        print('Not empty data received:' . ERR);
    }

    if ($dumpFlag) {
        print_r($allTodos);
        print(PHP_EOL);
    }


    /**
     * New data record creation
     */
    $controlString = 'testing text string';
    $todo->data('text', $controlString);
    $todo->create();

    $newRecordId = $todo->getLastId();
    if (!empty($newRecordId)) {
        print('New record ID received:' . OK);
        /**
         * Checking data inside
         */
        $todo->where('id', '=', $newRecordId);
        $recordData = $todo->getAll();
        if (!empty($recordData)) {
            print('Not empty new record data received:' . OK);
            if ($recordData[0]['text'] == $controlString) {
                print('Proper data received from created record:' . OK);
            } else {
                print('Proper data received from created record:' . ERR);
            }
        } else {
            print('Not empty new record data received:' . ERR);
        }

        /**
         * Data update
         */
        $newDataString = 'updated string here';
        $todo->data('text', $newDataString);
        $todo->where('id', '=', $newRecordId);
        $todo->save();

        $todo->where('id', '=', $newRecordId);
        $recordData = $todo->getAll();
        if ($recordData[0]['text'] != $controlString) {
            print('Record update succefull:' . OK);
            if ($recordData[0]['text'] == $newDataString) {
                print('Record updated data proper:' . OK);
            } else {
                print('Record updated data proper:' . ERR);
            }
        } else {
            print('Record update succefull:' . ERR);
        }

        /**
         * Record deletion
         */
        $todo->where('id', '=', $newRecordId);
        $todo->delete();

        //checking is record rly deleted
        $todo->where('id', '=', $newRecordId);
        $recordData = $todo->getAll();
        if (empty($recordData)) {
            print('Record deletion succefull:' . OK);
        } else {
            print('Record deletion succefull:' . ERR);
        }
    } else {
        print('Not empty data received:' . ERR);
    }
} else {
    print('Usage: php ./tests.php --run [--dump]' . PHP_EOL);
}