<?php

class Subject
{
    private $id;

    private $tId;

    private $name;

    private $duration;

    private $description;

    protected $note;

    const COEFFICIENT = 2;



    /**
     * Constructeur
     *
     * @param int $id
     * @param int $tId
     * @param string $name
     * @param int $duration
     * @param string $description
     */
    public function __construct($id, $tId, $name, $duration, $description, $note)
    {
        $this->id = $id;
        $this->tId = $tId;
        $this->name = $name;
        $this->duration = $duration;
        $this->description = $description;
        $this->note = $note;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tId
     */
    public function getTId()
    {
        return $this->tId;
    }

    /**
     * Set the value of tId
     */
    public function setTId($tId)
    {
        $this->tId = $tId;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }



    /**
     * Ajoute un objet dans un tableau
     *
     * @param array $array
     * @return array
     */
    public function addToList(&$array)
    {
        array_push($array, $this);
    }

    /**
     * Modifier l'objet
     *
     * @param int $key
     * @param int|string $newValue
     * @return object
     */
    public function update($key, $newValue)
    {

        return $this->$key = $newValue;
    }

    /**
     * Modifie un element de la liste
     *
     * @param &array $aSubjects
     * @param integer $index
     * @param integer $id
     * @param integer $tId
     * @param string $name
     * @param string $duration
     * @param string $description
     * @return array
     */
    public function updateListByIndex(&$aSubjects, $index, $id = 0, $tId = 0, $name = '', $duration = '', $description = '')
    {

        if (!empty($id)) :
            $aSubjects[$index]->id = $id;
        endif;
        if (!empty($name)) :
            $aSubjects[$index]->tId = $tId;
        endif;
        if (!empty($name)) :
            $aSubjects[$index]->name = $name;
        endif;

        if (!empty($description)) :
            $aSubjects[$index]->description = $description;
        endif;

        if (!empty($duration)) :
            $aSubjects[$index]->duration = $duration;
        endif;
    }

    /**
     * Supprime un objet du tableau
     *
     * @param array $array
     * @return array
     */
    public function deleteFromList(&$array)
    {

        $index = array_search($this, $array);

        unset($array[$index]);
    }

    /**
     * Supprime un objet du tableau
     *
     * @param array $array
     * @return array
     */
    public function deleteFromListByIndex(&$array, $index)
    {

        unset($array[$index]);
    }

    public function getListSubject($aSubjects)
    {
        return $aSubjects;
    }

    public function getSubjectById($array, $key)
    {

        return $array[$key];
    }

    public function calculNote()
    {
        return $this->note * self::COEFFICIENT;
    }
}
