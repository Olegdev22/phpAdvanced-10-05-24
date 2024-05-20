<?php

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }


    public function getRed()
    {
        return $this->red;
    }


    public function setRed($red): void
    {
        if ($red >= 0 && $red <= 255) {

            $this->red = $red;
        } else {
            echo "Red must be between 0 and 255";
        }
    }


    public function getGreen()
    {
        return $this->green;
    }


    public function setGreen($green): void
    {
        if ($green >= 0 && $green <= 255) {

            $this->green = $green;
        } else {
            echo "Green must be between 0 and 255";
        }
    }


    public function getBlue()
    {
        return $this->blue;
    }


    public function setBlue($blue): void
    {
        if ($blue >= 0 && $blue <= 255) {

            $this->blue = $blue;
        } else {
            echo "Blue must be between 0 and 255";
        }
    }

    public function equals(Color $color): bool
    {
        return $this->getRed() == $this->getGreen() && $this->getBlue() == $this->getRed();

    }

    static public function random(array $colors)
    {
        foreach ($colors as $color) {
            $color(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
        }
        return $color;
    }

    public function mix(array $colors):int
    {

    return array_sum($colors) / count($colors);
    }

}

$color = new Color(100, 40, 100);
$color->equals($color);
// random

$mixedColor = $color->mix([255, 255, 255]);
$mixedColor->$color->getRed();
$mixedColor->$color->getGreen();
$mixedColor->$color->getBlue();