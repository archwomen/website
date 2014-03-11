<?php
        class rss {
                var $feed;
                function rss($feed) {
                        $this->feed = $feed;
                }
                function parse() {
                        $rss = simplexml_load_file($this->feed);
                        $rss_split = array();
                        foreach ($rss->channel->item as $item) {
                                $title = (string) $item->title; // Title
                                $link   = (string) $item->link; // Url Link
                                $rss_split[] = '<p><a href="'.$link.'" target="_blank">'.$title.'</a></p>';
                        }
                        return $rss_split;
                }
                function display($numrows,$head) {
                        $rss_split = $this->parse();
                        $i = 0;
                        $rss_data = '  '.$head.' ';
                        while ( $i < $numrows ) {
                                $rss_data .= $rss_split[$i];
                                $i++;
                        }
                        $user = str_replace('&lang=enus&format=rss_200','',$this->feed);
                        $rss_data.='     ';
                        return $rss_data;
                }
        }
    class atom {
        var $feed;
        function atom($feed) {
            $this->feed = $feed;
        }
        function parse() {
            $atom = simplexml_load_file($this->feed);
            $atom_split = array();
                foreach ($atom->entry as $entry) {
                    $title = (string) $entry->title; // Title
                    $link   = (string) $entry->id; // Url Link
                    $atom_split[] = '<p><a href="'.$link.'" target="_blank">'.$title.'</a></p>';
                }
                return $atom_split;
        }
        function display($numrows,$head) {
            $atom_split = $this->parse();
            $i = 0;
            $atom_data = '  '.$head.' ';
                while ( $i < $numrows ) {
                    $atom_data .= $atom_split[$i];
                    $i++;
                }
            $user = str_replace('&lang=enus&format=rss_200','',$this->feed);
            $atom_data.='     ';
            return $atom_data;
        }
    }
?>
