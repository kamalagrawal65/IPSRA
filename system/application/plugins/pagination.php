<?php
function pagination($link, $paging_data) {
        $links = "";
        
        // The first page
        $links .= anchor($link . '/' . $paging_data['first'], 'First', array('title' => 'Go to the first page', 'class' => 'first_page'));
        $links .= "\n";
        // The previous page
        $links .= anchor($link . '/' . $paging_data['prev'], '<', array('title' => 'Go to the previous page', 'class' => 'prev_page'));
        $links .= "\n";

        // The other pages        
        for ($i = $paging_data['start']; $i <= $paging_data['end']; $i++) {
            if ($i == $paging_data['page'])
                $current = ' current';
            else
                $current = "";
            
            $links .= anchor($link . '/' . $i, $i, array('title' => 'Go to page ' . $i, 'class' => 'page' . $current));
            $links .= "\n";
        }

        // The next page
        $links .= anchor($link . '/' . $paging_data['next'], '>', array('title' => 'Go to the next page', 'class' => 'next_page'));
        $links .= "\n";
        // The last page
        $links .= anchor($link . '/' . $paging_data['last'], 'Last', array('title' => 'Go to the last page', 'class' => 'last_page'));
        $links .= "\n";
        
        return $links;
    }  
?>