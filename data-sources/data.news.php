<?php

class datasourcenews extends SectionDatasource
{
    public $dsParamROOTELEMENT = 'news';
    public $dsParamORDER = 'asc';
    public $dsParamPAGINATERESULTS = 'no';
    public $dsParamLIMIT = '20';
    public $dsParamSTARTPAGE = '1';
    public $dsParamREDIRECTONEMPTY = 'no';
    public $dsParamREDIRECTONFORBIDDEN = 'no';
    public $dsParamREDIRECTONREQUIRED = 'no';
    public $dsParamSORT = 'order';
    public $dsParamHTMLENCODE = 'no';
    public $dsParamASSOCIATEDENTRYCOUNTS = 'no';
    

    public $dsParamFILTERS = array(
        '55' => 'yes',
        '56' => 'yes',
    );
        

    public $dsParamINCLUDEDELEMENTS = array(
        'title: formatted',
        'subtitle: formatted',
        'brick-image',
        'category',
        'date: formatted'
    );
    
    public $dsParamINCLUDEDASSOCIATIONS = array(
        'category' => array(
            'section_id' => '11',
            'field_id' => '91',
            'elements' => array(
                'category: formatted'
            )
        )
    );

    public function __construct($env = null, $process_params = true)
    {
        parent::__construct($env, $process_params);
        $this->_dependencies = array();
    }

    public function about()
    {
        return array(
            'name' => 'News',
            'author' => array(
                'name' => 'Olaf Schindler',
                'website' => 'http://localhost/nomus.gda.pl',
                'email' => 'studio@orkana39.pl'),
            'version' => 'Symphony 2.7.0',
            'release-date' => '2017-12-18T16:41:21+00:00'
        );
    }

    public function getSource()
    {
        return '8';
    }

    public function allowEditorToParse()
    {
        return true;
    }

    public function execute(array &$param_pool = null)
    {
        $result = new XMLElement($this->dsParamROOTELEMENT);

        try {
            $result = parent::execute($param_pool);
        } catch (FrontendPageNotFoundException $e) {
            // Work around. This ensures the 404 page is displayed and
            // is not picked up by the default catch() statement below
            FrontendPageNotFoundExceptionHandler::render($e);
        } catch (Exception $e) {
            $result->appendChild(new XMLElement('error',
                General::wrapInCDATA($e->getMessage() . ' on ' . $e->getLine() . ' of file ' . $e->getFile())
            ));
            return $result;
        }

        if ($this->_force_empty_result) {
            $result = $this->emptyXMLSet();
        }

        if ($this->_negate_result) {
            $result = $this->negateXMLSet();
        }

        return $result;
    }
}