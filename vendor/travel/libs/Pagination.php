<?

namespace travel\libs;

class Pagination{

    public $currentPage;  //текущая страница
    public $perpage;  //записей на странице 
    public $total;  //общее кол записей
    public $countPages; // кол страниц
    public $uri;  // адрес отправки пагинации

    public function __construct($page, $perpage, $total){
        $this->perpage = $perpage;
        $this->total = $total;
        $this->countPages = $this->getCoutnPages();
        $this->currentPage = $this->getCurrentPage($page);
        $this->uri = $this->getParams();
    }

    public function getCoutnPages(){
        return ceil($this->total / $this->perpage) ?: 1;
    }
    public function getCurrentPage($page){
        if (!$page || $page < 1) 
            $page = 1;
        if ($page > $this->countPages)
            $page = $this->countPages;
        return $page;
    }
    public function getParams(){
       $url = $_SERVER["REQUEST_URI"];
       $url = explode('?', $url);
       $uri = $url[0] . "?";
       if (isset($url[1]) && $url[1] != ''){
            $params = explode("&", $url[1]);
            foreach($params as $param){
                if (!preg_match("#page-#", $param))
                    $uri .= "{$param}&amp;";
            }
       }
       return $uri;
    }
    public function getStart(){
        return ($this->currentPage -1) * $this->perpage;
    }

    public function __toString()
    {
        return $this->getHtml();
    }
    public function getHtml()
    {
        $back = null; //ссылка назад
        $forward = null; //ссылка вперед
        $startpage = null; //ссылка в начало
        $endpage = null;    //ссылка в конец
        $page2left = null; //вторая старница слева
        $page1left = null;  //первая старница слева
        $page2right = null; //вторая старница справа
        $page1right = null; //первая старница справа

        if ($this->currentPage > 1){
            $back = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->currentPage - 1) ."'>&lt;</a></li>";
        }
        if ($this->currentPage < $this->countPages){
            $forward = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->currentPage + 1) ."'>&gt;</a></li>";
        }
        if ($this->currentPage > 3){
            $startpage = "<li><a class='nav-link' href='{$this->uri}page=1'>&laquo;</a></li>";
        }
        if ($this->currentPage < ($this->countPages - 2)){
            $endpage = "<li><a class='nav-link' href='{$this->uri}page={$this->countPages}'>&raquo;</a></li>";
        }

        if ($this->currentPage - 2 > 0){
            $page2left = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->currentPage - 2) . "'>" . ($this->currentPage - 2) . "</a></li>";
        }
        if ($this->currentPage - 1 > 0){
            $page1left = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->currentPage - 1) . "'>" . ($this->currentPage - 1) . "</a></li>";
        }
        if ($this->currentPage + 2 <= $this->countPages){
            $page2right = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->currentPage + 2) . "'>" . ($this->currentPage + 2) . "</a></li>";
        }
        if ($this->currentPage + 1 <= $this->countPages){
            $page1right = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->currentPage + 1) . "'>" . ($this->currentPage + 1) . "</a></li>";
        }

        return '<ul class="pagination">' . $startpage .$back.$page2left .$page1left . '<li class="active"><a>' .$this->currentPage. '</a></li>' . $page1right.$page2right.$forward.$endpage . '</ul>';
    }


}