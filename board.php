<?php
class Board
{
	public $boardArray;
	public $size;
	
	public function __construct($size)
	{
	// initialize attributes
		$this->size = $size;
		$this->boardArray = array_fill(0, $this->size, "");
		for($i = 0; $i < $this->size; $i++)
		{
			$this->boardArray[$i] = array_fill(0, $this->size, "");
		}
	}
	
	public function getArray()
	{
		// returns the current board
		return $this->boardArray;
	}
	
	public function getSize()
	{
		return $this->size;
	}
	
	public function displayBoard($game)
	{
		$sym = "";
		// displays the board to the screen
		echo ('<table class="tic">');
			for ($num = 0; $num < $this->size; $num++)
			{
				echo ('<tr>');
				for ($i = 0; $i < $this->size; $i++)
				{
				$sym = $game->board->boardArray[$num][$i];
					if(empty($game->board->boardArray[$num][$i]))
					{
						echo ('<td><input type="submit" class="reset field" name="cell-'.$num.'-'.$i.'" value="'.$game->getCurrentPlayer()->getSymbol().'" /></td>');
					}
					else
					{
						echo ('<td><span class="'.$game->getColor($sym).'">'.$sym.'</span></td>');
					}
				}
				echo ('</tr>');
			}
		echo ('</table>');
		
	}
}

?>