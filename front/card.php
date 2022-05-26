<?php
class Card
{
    private string $title;
    private string $description;
    private string $date;
    private string $picture;

    public function __construct(string $title, string $description, string $date, string $picture)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->picture = $picture;
    }




    public function getTitle(): string
    {
        return $this->title;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDate(): string
    {
        return $this->date;
    }
    public function getPicture()
    {
        return $this->picture;
    }

    public function displayCard()
    {
        echo '<div id="articles">
        <div class="picture">
            <img src="' . $this->getPicture() . '" alt="notre maillot " />
            <span>' . $this->getTitle() . '</span>
            <span class="date-de-sortit">' . $this->getDate() . '</span>
        </div>
    </div>';
    }
}