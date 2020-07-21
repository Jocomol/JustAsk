<?php

require_once '../lib/Repository.php';


class newquestionRepository extends Repository
{

    protected $tableName = 'Frage';

    /**
     * Erstellt einen neuen benutzer mit den gegebenen Werten.
     *
     * Das Passwort wird vor dem ausführen des Queries noch mit dem SHA1
     *  Algorythmus gehashed.
     *
     * @param $firstName Wert für die Spalte firstName
     * @param $lastName Wert für die Spalte lastName
     *
     * @throws Exception falls das Ausführen des Statements fehlschlägt
     */
    public function create($Inhalt, $Titel)
    {
        $query = "INSERT INTO $this->tableName (Inhalt, Titel) VALUES (?, ?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ss', $Inhalt, $Titel);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        return $statement->insert_id;
    }
}
