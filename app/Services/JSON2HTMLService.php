<?php

namespace App\Services;

class JSON2HTMLService
{
    public static function decode($json)
    {
        $result = "";

        foreach ($json as $element)
        {
            if ($element['type'] == 'Paragraph')
            {
                $result .= "<p class=\"text__simple_text\">{$element['content']}</p>";
            }
            elseif($element['type'] == 'H2')
            {
                $result .= "<h2>{$element['content']}</h2>";
            }
            elseif($element['type'] == 'Image')
            {
                $result .= "<img src=\"{$element['src']}\" alt=\"{$element['alt']}\" width=\"100%\">";
            }
            elseif($element['type'] == 'List')
            {
                $result .= '<ul class="text__list">';
                foreach ($element['content'] as $listItem)
                {
                    $result .= "<li>{$listItem}</li>";
                }
                $result .= '</ul>';
            }
            elseif($element['type'] == 'HTML')
            {
                $result .= $element['content'];
            }
        }

        return $result;
    }
}
