<?php

//see public/staff/bicycles/index.php

class Pagination {

  public $current_page;
  public $per_page;
  public $total_count;

  public function __construct($page=1, $per_page=20, $total_count=0) {
    $this->current_page = (int) $page; //because arguments are strings, need to int cast
    $this->per_page = (int) $per_page;
    $this->total_count = (int) $total_count;
  }

  public function offset() {
    return $this->per_page * ($this->current_page - 1); //offset formula
  }

  public function total_pages() {
    return ceil($this->total_count / $this->per_page); //total pages = total items / items per page
  }

  public function previous_page() {
    $prev = $this->current_page - 1;
    return ($prev > 0) ? $prev : false; //if is less than 0 pages, then return false
  }

  public function next_page() {
    $next = $this->current_page + 1;
    return ($next <= $this->total_pages()) ? $next : false; //if is greater than total pages, then return false
  }

  public function previous_link($url="") {
    $link = "";
    if($this->previous_page() != false) { //if not on page 0
      $link .= "<a href=\"{$url}?page={$this->previous_page()}\">";
      $link .= "&laquo; Previous</a>"; //&... is left arrow symbol in html
    }
    return $link;
  }

  public function next_link($url="") {
    $link = "";
    if($this->next_page() != false) { //if not on page MAX - 1
      $link .= "<a href=\"{$url}?page={$this->next_page()}\">";
      $link .= "Next &raquo;</a>"; //&... is right arrow symbol in html
    }
    return $link;
  }

  public function number_links($url="") { //takes link url to add onto (makes it flexible)
    $output = "";
    for($i=1; $i <= $this->total_pages(); $i++) { //for each page
      if($i == $this->current_page) {
        $output .= "<span class=\"selected\">{$i}</span>"; //for current page, make a selected text
      } else {
        $output .= "<a href=\"{$url}?page={$i}\">{$i}</a>"; //otherwise, output number with link with php id of page
      }
      //see public/stylesheets/staff.css
    }
    return $output;
  }

  public function page_links($url) {
    $output = "";
    if($this->total_pages() > 1) { //if only one page, do not need to display
      $output .= "<div class=\"pagination\">";
      $output .= $this->previous_link($url); //this and next 2 lines are "a" tags in div
      $output .= $this->number_links($url);
      $output .= $this->next_link($url);
      $output .= "</div>";
    }
    return $output;
  }
}

?>
