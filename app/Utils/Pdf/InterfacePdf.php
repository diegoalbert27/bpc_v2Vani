<?php

namespace App\Utils\Pdf;

interface InterfacePdf
{
    public function Header();
    public function Footer();
    public function Render();
}
