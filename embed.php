<?php
	function popup($cap) {
		echo '<script>alert("'.$cap.'")</script>';
	}
	function generate($input) {
		$dataObject = json_decode($input,true);
		$nameObject = $dataObject['name'];
		$typeObject = $dataObject['type'];
		$imgObject = $dataObject['img'];
		$captionObject = $dataObject['caption'];
		$altTextObject = $dataObject['altText'];
		$classOptionObject = $dataObject['classOption'];
		$actionObject = $dataObject['action'];

		switch ($typeObject) {
			case 'button':
				$htmlCaption = "";
				if ($captionObject!="") {
					$htmlCaption = "<div class=\"$nameObject-Caption button-default-Caption\">
				                    $captionObject
				                </div>";
				}
				$htmlImgCaption = "";
				if ($imgObject=="true") {
					$htmlImgCaption = "<div class=\"$nameObject-Images button-default-Images\">
				                    <div class=\"$nameObject-IconBG-Hovered button-default-IconBG-Hovered\"></div>
				                    <div class=\"$nameObject-IconBG button-default-IconBG\"></div>
				                </div>";
				}
				// final step
				echo "
				<div class=\"$nameObject button-default $classOptionObject\"
				    onmouseover=\"buttonHover(['button','border','img','caption'],'on','$nameObject');\"
				    onmouseleave=\"buttonHover(['button','border','img','caption'],'off','$nameObject');\"
				    onmouseup=\"$actionObject\"
				    title=\"$altTextObject\" >
				    <div class=\"$nameObject-Absolute button-default-Absolute\">
				        <div class=\"$nameObject-Hover1 button-default-Hover1\"></div>
				        <div class=\"$nameObject-Hover2 button-default-Hover2\"></div>
				        <div class=\"button-default-ObjectInside\">
				            <div class=\"button-default-ObjectInside-Centered\">
				                $htmlImgCaption
				            	$htmlCaption    
				            </div>
				        </div>
				    </div>
				</div>";
				break;
			default:
				popup('invalid');
				break;
		}
	}
?>