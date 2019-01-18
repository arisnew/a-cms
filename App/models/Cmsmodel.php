<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmsmodel extends Model {

    private $site_id;

    public function __construct() {
        parent::__construct();
        $this->site_id = $this->config->item('default_org_site');
    }

    /*
    * get menu by menu group id
    * return result array object
    */
    public function getMenuByGroup($menu_group_id = null)
    {
        return $this->getList(array(
            'table' => 'cms_menu',
            'where' => array(
                'menu_group_id' => $menu_group_id,
                'is_active' => 1,
                'site_id' => $site_id
                ),
            'sort' => 'menu_index ASC'
            ));
    }

    /*
    * get value setting by var_set
    * return string
    */
    public function getSetByVar($var_set)
    {
        $val_set = '';
        $dataSet = $this->getRecord(array(
            'table' => 'cms_setting',
            'where' => array(
                'var_set' => $var_set,
                'is_active' => 1
                )
            ));
        
        if ($dataSet) {
            if ($dataSet->is_file == 1){
                $val_set = base_url('asset/files/cms_setting/'.$dataSet->file_set);
            }else{
                $val_set = $dataSet->val_set;   
            }
        }

        return $val_set;
    }

    /*
    * get recent post
    * return array object
    */
    public function getRecentPost($limit = 5)
    {
        $dataPost = $this->getList(array(
            'table' => 'v_cms_article',
            'where' => array(
                'is_publish' => 1,
                'site_id' => $site_id
                ),
            'sort' => 'created_on DESC',
            'limit' => array($limit)
            ));

        return $dataPost;
    }

    /*
    * get featured post
    * return array object
    */
    public function getFeaturedPost($limit = 5)
    {
        $dataPost = $this->getList(array(
            'table' => 'v_cms_article',
            'where' => array(
                'is_publish' => 1,
                'is_featured' => 1,
                'site_id' => $site_id
                ),
            'sort' => 'created_on DESC',
            'limit' => array($limit)
            ));

        return $dataPost;
    }

    /*
    * get jumbotron post
    * return array object
    */
    public function getJumbotronPost($limit = 1)
    {
        $dataPost = $this->getList(array(
            'table' => 'v_cms_article',
            'where' => array(
                'is_publish' => 1,
                'is_jumbotron' => 1,
                'site_id' => $site_id
                ),
            'sort' => 'created_on DESC',
            'limit' => array($limit)
            ));

        return $dataPost;
    }

    /*
    * get archives post
    * return array object
    */
    public function getArchivePost()
    {
        $dataPost = $this->getList(array(
            'table' => 'v_cms_archive_post',
            'where' => array(
                'site_id' => $site_id
                )
            ));

        return $dataPost;
    }
    
    /*
    * get popular post
    * return array object
    */
    public function getPopularPost($limit = 5, $category = null)
    {
            
        if ($category) {
            $query = "
                SELECT * FROM v_cms_article WHERE is_publish = 1 AND site_id = ".$site_id." 
                    AND article_id IN (SELECT article_id FROM cms_articlecategory WHERE article_category_id = $category)
                     ORDER BY $sort
                     LIMIT $limit

            ";
            $dataPost = $this->getListByQuery($query);
        } else {
            $query = array(
                'table' => 'v_cms_article',
                'where' => array(
                    'is_publish' => 1,
                    'site_id' => $site_id
                    ),
                'sort' => 'counter DESC',
                'limit' => array($limit)
                );
            $dataPost = $this->getList($query);
        }
        
        return $dataPost;
    }

    public function getArticleByLink($link = null)
    {
        $result = null;
        if($link) {
            $result = $this->getRecord(array('table' => 'v_cms_article', 'where' => array('article_link' => $link, 'is_publish' => 1)));
        }

        return $result;
    }

    public function getCategoriesByArticle($article_id)
    {
        $result = null;
        if($link) {
            $result = $this->getList(array('table' => 'v_cms_articlecategory', 'where' => array('article_id' => $article_id)));
        }

        return $result;
    }
    
    public function getTagsByArticle($article_id)
    {
        $result = null;
        if($link) {
            $result = $this->getList(array('table' => 'v_cms_articletags', 'where' => array('article_id' => $article_id)));
        }

        return $result;
    }
}