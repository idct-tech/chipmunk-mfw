<?php
namespace IDCT\Cms\Chipmunk;

use IDCT\Cms\Chipmunk\Definitions\Interfaces\FrontendInterface as FrontendInterface;
use IDCT\Cms\Chipmunk\Definitions\Types\Object as Object;
/**
 * Frontend short summary.
 *
 * Frontend description.
 *
 * @version 1.0
 * @author Bartosz
 */
class Frontend extends Object implements FrontEndInterface
{
    protected $javascripts = array();

    public function registerJavascript($path) {
        $this->javascripts[] = $path;
    }

    protected function generateJavascripts($targetFilename) {
        $targetContent = "";
        foreach($this->javascripts as $javascript) {
            $targetContent .= file_get_contents($javascript);
        }

        file_put_contents($targetFilename, $targetContent);

        return $this;
    }

    public function getJavascriptsPath() {
        $mtimeString = "";
        foreach($this->javascripts as $javascript) {
            $mtimeString .= (string)(filemtime($javascript));
        }

        $fileNameNew = sha1($mtimeString);
        $targetFileName = "js/" . $fileNameNew . ".js";
        if(file_exists($targetFileName) !== true) {
            $this->generateJavascripts($targetFileName);
        }
        return $targetFileName;
    }
}
