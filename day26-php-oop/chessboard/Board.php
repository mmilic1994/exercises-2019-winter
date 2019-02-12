<?php

class Board
{
    protected $pieces = [];

    public function __construct($pieces)
    {
        $this->pieces = $pieces;
    }

    public function __toString()
    {
        $html = '';
        $html .= '<div class="board">';

        for ($x = 1; $x <= 8; $x++) {
            $html .= '<div class="row">';

            for ($y = 1; $y <= 8; $y++) {
                
                if (isset($this->pieces[$x][$y])) {
                    $piece = new Piece($this->pieces[$x][$y]);
                } else {
                    $piece = null;
                }

                $square = new Square($x, $y, $piece);
                $html .= $square;

            }

            $html .= '</div>';
        }

        $html .= '</div>';

        return $html;
    }

    function loadFromFEN($fen)
    {
        $parts = preg_split('#\s+#', $fen);
        $rows = explode('/', $parts[0]);
    
        $pieces = array();
    
        $y = 8;
        foreach($rows as $row)
        {
            $x = 1;
            for($i = 0; $i < strlen($row); $i++)
            {
                if(is_numeric($row[$i]))
                {
                    $x += intval($row[$i]);
                }
                else
                {
                    $pieces[$x][$y] = $row[$i];
                    $x++;
                }
            }
            $y--;
        }

        $this->pieces = $pieces;
    }
}