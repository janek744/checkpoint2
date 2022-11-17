<?php

namespace App\Models;

use App\Core\Model;

class Prispevok extends Model
{
    protected $id_prispevku;
    protected $obrazok;
    protected $nazov;
    protected $text;

    /**
     * @return mixed
     */
    public function getIdPrispevku()
    {
        return $this->id_prispevku;
    }

    /**
     * @param mixed $id_prispevku
     */
    public function setIdPrispevku($id_prispevku): void
    {
        $this->id_prispevku = $id_prispevku;
    }

    /**
     * @return mixed
     */
    public function getObrazok()
    {
        return $this->obrazok;
    }

    /**
     * @param mixed $obrazok
     */
    public function setObrazok($obrazok): void
    {
        $this->obrazok = $obrazok;
    }

    /**
     * @return mixed
     */
    public function getNazov()
    {
        return $this->nazov;
    }

    /**
     * @param mixed $nazov
     */
    public function setNazov($nazov): void
    {
        $this->nazov = $nazov;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }


}