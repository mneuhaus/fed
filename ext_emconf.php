<?php

########################################################################
# Extension Manager/Repository config file for ext "fed".
#
# Auto generated 06-08-2011 11:54
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Fluid Extbase Development Framework',
	'description' => 'Extensive library of Configuration, Plugins, ViewHelpers and Services for making Fluid Page Templates, Fluid Content Elements, AJAX form validations, AJAX-REST-enabled ExtJS4 Models and so much more. Web site: http://fedext.net',
	'category' => 'misc',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.3.38',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:395:{s:21:"ExtensionBuilder.json";s:4:"d134";s:16:"ext_autoload.php";s:4:"5da3";s:12:"ext_icon.gif";s:4:"ccc4";s:17:"ext_localconf.php";s:4:"5c9b";s:14:"ext_tables.php";s:4:"fdb8";s:14:"ext_tables.sql";s:4:"1fa1";s:24:"ext_typoscript_setup.txt";s:4:"1b9a";s:35:"Classes/Backend/DynamicFlexForm.php";s:4:"d64e";s:31:"Classes/Backend/FCESelector.php";s:4:"3664";s:31:"Classes/Backend/HiddenField.php";s:4:"1b50";s:34:"Classes/Backend/MakeQueryArray.php";s:4:"88f2";s:38:"Classes/Backend/PageLayoutSelector.php";s:4:"01ab";s:27:"Classes/Backend/Preview.php";s:4:"a08c";s:27:"Classes/Backend/TCEMain.php";s:4:"7e36";s:38:"Classes/Backend/TemplaVoilaPreview.php";s:4:"2d7b";s:46:"Classes/Configuration/ConfigurationManager.php";s:4:"4ee0";s:43:"Classes/Controller/DataSourceController.php";s:4:"e468";s:55:"Classes/Controller/FlexibleContentElementController.php";s:4:"19e5";s:37:"Classes/Controller/HashController.php";s:4:"5cdd";s:37:"Classes/Controller/PageController.php";s:4:"510a";s:40:"Classes/Controller/SandboxController.php";s:4:"eebd";s:41:"Classes/Controller/TemplateController.php";s:4:"c5d7";s:37:"Classes/Controller/ToolController.php";s:4:"307a";s:35:"Classes/Core/AbstractController.php";s:4:"4042";s:41:"Classes/Core/AbstractWidgetController.php";s:4:"ad53";s:26:"Classes/Core/Bootstrap.php";s:4:"9a39";s:53:"Classes/Core/ViewHelper/AbstractBackendViewHelper.php";s:4:"418b";s:51:"Classes/Core/ViewHelper/AbstractDebugViewHelper.php";s:4:"7da7";s:53:"Classes/Core/ViewHelper/AbstractExtbaseViewHelper.php";s:4:"85b7";s:49:"Classes/Core/ViewHelper/AbstractFceViewHelper.php";s:4:"9c2c";s:52:"Classes/Core/ViewHelper/AbstractJQueryViewHelper.php";s:4:"72b2";s:46:"Classes/Core/ViewHelper/AbstractViewHelper.php";s:4:"c577";s:32:"Classes/Domain/Model/Address.php";s:4:"be5f";s:38:"Classes/Domain/Model/BackendLayout.php";s:4:"4413";s:39:"Classes/Domain/Model/ContentElement.php";s:4:"0337";s:35:"Classes/Domain/Model/DataSource.php";s:4:"efe7";s:29:"Classes/Domain/Model/Page.php";s:4:"a31d";s:47:"Classes/Domain/Repository/AddressRepository.php";s:4:"f107";s:53:"Classes/Domain/Repository/BackendLayoutRepository.php";s:4:"c11a";s:54:"Classes/Domain/Repository/ContentElementRepository.php";s:4:"308f";s:50:"Classes/Domain/Repository/DataSourceRepository.php";s:4:"6da7";s:44:"Classes/Domain/Repository/PageRepository.php";s:4:"2be9";s:32:"Classes/ExtJS/ModelGenerator.php";s:4:"69b5";s:37:"Classes/Object/AbstractOverloader.php";s:4:"fe4b";s:26:"Classes/Object/Limiter.php";s:4:"6dfe";s:32:"Classes/Object/ObjectManager.php";s:4:"1ec4";s:28:"Classes/Object/Offsetter.php";s:4:"b9d8";s:28:"Classes/Object/Paginater.php";s:4:"f31c";s:24:"Classes/Object/Query.php";s:4:"513b";s:31:"Classes/Object/QueryManager.php";s:4:"f8c0";s:35:"Classes/Object/Query/ArrayQuery.php";s:4:"5a61";s:36:"Classes/Object/Query/ObjectQuery.php";s:4:"c955";s:43:"Classes/Object/Query/ObjectStorageQuery.php";s:4:"10c8";s:41:"Classes/Object/Query/QueryResultQuery.php";s:4:"a58f";s:41:"Classes/Persistence/FileObjectStorage.php";s:4:"b602";s:34:"Classes/Persistence/Repository.php";s:4:"d38d";s:37:"Classes/Resource/AbstractResource.php";s:4:"7275";s:25:"Classes/Resource/File.php";s:4:"5b5e";s:26:"Classes/Resource/Image.php";s:4:"9c9e";s:24:"Classes/Service/File.php";s:4:"0eb5";s:24:"Classes/Service/Page.php";s:4:"9b1a";s:23:"Classes/Utility/CDN.php";s:4:"8ccd";s:34:"Classes/Utility/CloningService.php";s:4:"a5ad";s:34:"Classes/Utility/DataComparison.php";s:4:"b563";s:36:"Classes/Utility/DataSourceParser.php";s:4:"74c2";s:25:"Classes/Utility/Debug.php";s:4:"daaf";s:32:"Classes/Utility/DocumentHead.php";s:4:"b6c4";s:36:"Classes/Utility/DomainObjectInfo.php";s:4:"39af";s:25:"Classes/Utility/ExtJS.php";s:4:"f6ae";s:28:"Classes/Utility/FlexForm.php";s:4:"ce5f";s:28:"Classes/Utility/Geocoder.php";s:4:"bb6c";s:24:"Classes/Utility/JSON.php";s:4:"b858";s:36:"Classes/Utility/JavascriptPacker.php";s:4:"faf8";s:23:"Classes/Utility/PDF.php";s:4:"fe25";s:30:"Classes/Utility/PageLayout.php";s:4:"d4d5";s:33:"Classes/Utility/PartialRender.php";s:4:"d0d8";s:34:"Classes/Utility/PropertyMapper.php";s:4:"f161";s:36:"Classes/Utility/RecursionHandler.php";s:4:"a0d5";s:24:"Classes/Utility/SASS.php";s:4:"9f6d";s:36:"Classes/View/ExposedTemplateView.php";s:4:"3ff9";s:38:"Classes/ViewHelpers/CaseViewHelper.php";s:4:"818a";s:40:"Classes/ViewHelpers/CoffeeViewHelper.php";s:4:"d0de";s:41:"Classes/ViewHelpers/CommentViewHelper.php";s:4:"d4c5";s:43:"Classes/ViewHelpers/CsspressoViewHelper.php";s:4:"fdd1";s:39:"Classes/ViewHelpers/DebugViewHelper.php";s:4:"059e";s:41:"Classes/ViewHelpers/FaviconViewHelper.php";s:4:"0fe3";s:37:"Classes/ViewHelpers/FceViewHelper.php";s:4:"f533";s:38:"Classes/ViewHelpers/FormViewHelper.php";s:4:"a340";s:38:"Classes/ViewHelpers/HideViewHelper.php";s:4:"d85e";s:36:"Classes/ViewHelpers/IfViewHelper.php";s:4:"0fe3";s:39:"Classes/ViewHelpers/ImageViewHelper.php";s:4:"7af3";s:38:"Classes/ViewHelpers/LoopViewHelper.php";s:4:"558c";s:37:"Classes/ViewHelpers/MapViewHelper.php";s:4:"0c5c";s:38:"Classes/ViewHelpers/MathViewHelper.php";s:4:"b2f6";s:38:"Classes/ViewHelpers/PageViewHelper.php";s:4:"73fb";s:37:"Classes/ViewHelpers/PdfViewHelper.php";s:4:"6ba2";s:37:"Classes/ViewHelpers/RawViewHelper.php";s:4:"e057";s:42:"Classes/ViewHelpers/RedirectViewHelper.php";s:4:"0134";s:40:"Classes/ViewHelpers/RenderViewHelper.php";s:4:"c9ea";s:42:"Classes/ViewHelpers/ResourceViewHelper.php";s:4:"375c";s:38:"Classes/ViewHelpers/SassViewHelper.php";s:4:"60eb";s:40:"Classes/ViewHelpers/ScriptViewHelper.php";s:4:"665c";s:38:"Classes/ViewHelpers/SolrViewHelper.php";s:4:"f10f";s:39:"Classes/ViewHelpers/StyleViewHelper.php";s:4:"2646";s:40:"Classes/ViewHelpers/SwitchViewHelper.php";s:4:"3cb3";s:39:"Classes/ViewHelpers/TableViewHelper.php";s:4:"482e";s:42:"Classes/ViewHelpers/TagCloudViewHelper.php";s:4:"aad3";s:48:"Classes/ViewHelpers/Be/ContentAreaViewHelper.php";s:4:"e01c";s:51:"Classes/ViewHelpers/Be/ContentElementViewHelper.php";s:4:"d265";s:56:"Classes/ViewHelpers/Be/Link/Content/DeleteViewHelper.php";s:4:"d019";s:54:"Classes/ViewHelpers/Be/Link/Content/EditViewHelper.php";s:4:"4ffc";s:53:"Classes/ViewHelpers/Be/Link/Content/NewViewHelper.php";s:4:"aa82";s:55:"Classes/ViewHelpers/Be/Link/Content/PasteViewHelper.php";s:4:"6370";s:60:"Classes/ViewHelpers/Be/Link/Content/VisibilityViewHelper.php";s:4:"ac50";s:55:"Classes/ViewHelpers/Be/Uri/Content/DeleteViewHelper.php";s:4:"0fdc";s:53:"Classes/ViewHelpers/Be/Uri/Content/EditViewHelper.php";s:4:"61d7";s:52:"Classes/ViewHelpers/Be/Uri/Content/NewViewHelper.php";s:4:"21d6";s:54:"Classes/ViewHelpers/Be/Uri/Content/PasteViewHelper.php";s:4:"b8bc";s:59:"Classes/ViewHelpers/Be/Uri/Content/VisibilityViewHelper.php";s:4:"ed96";s:43:"Classes/ViewHelpers/Data/FuncViewHelper.php";s:4:"6850";s:43:"Classes/ViewHelpers/Data/JsonViewHelper.php";s:4:"9b53";s:43:"Classes/ViewHelpers/Data/SortViewHelper.php";s:4:"82cd";s:45:"Classes/ViewHelpers/Data/SourceViewHelper.php";s:4:"00ca";s:42:"Classes/ViewHelpers/Data/SqlViewHelper.php";s:4:"1040";s:42:"Classes/ViewHelpers/Data/VarViewHelper.php";s:4:"c160";s:45:"Classes/ViewHelpers/Debug/BeginViewHelper.php";s:4:"731a";s:43:"Classes/ViewHelpers/Debug/DieViewHelper.php";s:4:"867a";s:44:"Classes/ViewHelpers/Debug/DumpViewHelper.php";s:4:"9018";s:43:"Classes/ViewHelpers/Debug/EndViewHelper.php";s:4:"4f81";s:43:"Classes/ViewHelpers/Debug/LapViewHelper.php";s:4:"a271";s:45:"Classes/ViewHelpers/Debug/StackViewHelper.php";s:4:"6e45";s:49:"Classes/ViewHelpers/Debug/VariablesViewHelper.php";s:4:"b50f";s:43:"Classes/ViewHelpers/ExtJS/AppViewHelper.php";s:4:"412d";s:49:"Classes/ViewHelpers/ExtJS/ComponentViewHelper.php";s:4:"25e2";s:46:"Classes/ViewHelpers/ExtJS/ExposeViewHelper.php";s:4:"78d0";s:45:"Classes/ViewHelpers/Fce/ContentViewHelper.php";s:4:"a7d1";s:43:"Classes/ViewHelpers/Fce/FieldViewHelper.php";s:4:"18dc";s:42:"Classes/ViewHelpers/Fce/GridViewHelper.php";s:4:"ab7a";s:43:"Classes/ViewHelpers/Fce/GroupViewHelper.php";s:4:"97fe";s:51:"Classes/ViewHelpers/Fce/RenderContentViewHelper.php";s:4:"48e8";s:49:"Classes/ViewHelpers/Fce/RenderFieldViewHelper.php";s:4:"a466";s:52:"Classes/ViewHelpers/Fce/Field/CheckboxViewHelper.php";s:4:"4eef";s:49:"Classes/ViewHelpers/Fce/Field/GroupViewHelper.php";s:4:"0ccd";s:49:"Classes/ViewHelpers/Fce/Field/InputViewHelper.php";s:4:"4352";s:50:"Classes/ViewHelpers/Fce/Field/SelectViewHelper.php";s:4:"735a";s:48:"Classes/ViewHelpers/Fce/Field/TextViewHelper.php";s:4:"ee24";s:52:"Classes/ViewHelpers/Fce/Field/UserFuncViewHelper.php";s:4:"303b";s:49:"Classes/ViewHelpers/Fce/Grid/ColumnViewHelper.php";s:4:"5a4c";s:46:"Classes/ViewHelpers/Fce/Grid/RowViewHelper.php";s:4:"728c";s:49:"Classes/ViewHelpers/Fce/Tab/ContentViewHelper.php";s:4:"972e";s:46:"Classes/ViewHelpers/Fce/Tab/FileViewHelper.php";s:4:"fe0b";s:47:"Classes/ViewHelpers/Fce/Tab/ImageViewHelper.php";s:4:"0326";s:45:"Classes/ViewHelpers/Fce/Tab/MapViewHelper.php";s:4:"5bc3";s:47:"Classes/ViewHelpers/Fce/Tab/TableViewHelper.php";s:4:"e33d";s:50:"Classes/ViewHelpers/Form/MultiUploadViewHelper.php";s:4:"5bf1";s:55:"Classes/ViewHelpers/Format/ColorTransformViewHelper.php";s:4:"aeb0";s:50:"Classes/ViewHelpers/JQuery/AccordionViewHelper.php";s:4:"59b2";s:44:"Classes/ViewHelpers/JQuery/CdnViewHelper.php";s:4:"3622";s:55:"Classes/ViewHelpers/JQuery/ContentRotatorViewHelper.php";s:4:"d2a3";s:49:"Classes/ViewHelpers/JQuery/LightboxViewHelper.php";s:4:"6554";s:44:"Classes/ViewHelpers/JQuery/TabViewHelper.php";s:4:"78b0";s:45:"Classes/ViewHelpers/Map/GeocodeViewHelper.php";s:4:"d9ff";s:43:"Classes/ViewHelpers/Map/LayerViewHelper.php";s:4:"553a";s:44:"Classes/ViewHelpers/Map/MarkerViewHelper.php";s:4:"f534";s:43:"Classes/ViewHelpers/Map/TableViewHelper.php";s:4:"4256";s:49:"Classes/ViewHelpers/Page/BreadCrumbViewHelper.php";s:4:"e047";s:43:"Classes/ViewHelpers/Page/MenuViewHelper.php";s:4:"9bf5";s:52:"Classes/ViewHelpers/Page/RenderContentViewHelper.php";s:4:"ee72";s:53:"Classes/ViewHelpers/Page/Field/CheckboxViewHelper.php";s:4:"1f99";s:50:"Classes/ViewHelpers/Page/Field/GroupViewHelper.php";s:4:"73c9";s:50:"Classes/ViewHelpers/Page/Field/InputViewHelper.php";s:4:"4f4d";s:51:"Classes/ViewHelpers/Page/Field/SelectViewHelper.php";s:4:"ffd0";s:49:"Classes/ViewHelpers/Page/Field/TextViewHelper.php";s:4:"16e5";s:53:"Classes/ViewHelpers/Page/Field/UserFuncViewHelper.php";s:4:"9056";s:49:"Classes/ViewHelpers/Profile/MeasureViewHelper.php";s:4:"659a";s:47:"Classes/ViewHelpers/Profile/ResetViewHelper.php";s:4:"7fd0";s:49:"Classes/ViewHelpers/Profile/SummaryViewHelper.php";s:4:"3299";s:46:"Classes/ViewHelpers/Profile/TickViewHelper.php";s:4:"8dcc";s:50:"Classes/ViewHelpers/Resource/ArchiveViewHelper.php";s:4:"f1d8";s:47:"Classes/ViewHelpers/Resource/FileViewHelper.php";s:4:"07c2";s:48:"Classes/ViewHelpers/Resource/ImageViewHelper.php";s:4:"ef06";s:44:"Classes/ViewHelpers/Style/LinkViewHelper.php";s:4:"9d52";s:46:"Classes/ViewHelpers/Style/SwitchViewHelper.php";s:4:"09a6";s:56:"Classes/ViewHelpers/TagCloud/TagOccurrenceViewHelper.php";s:4:"e153";s:46:"Classes/ViewHelpers/TagCloud/TagViewHelper.php";s:4:"8d4e";s:52:"Classes/ViewHelpers/Tools/CacheControlViewHelper.php";s:4:"906b";s:53:"Classes/ViewHelpers/Tools/CookieControlViewHelper.php";s:4:"76ca";s:54:"Classes/ViewHelpers/Tools/SessionControlViewHelper.php";s:4:"29cc";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"efc0";s:38:"Configuration/FlexForms/DataSource.xml";s:4:"9050";s:35:"Configuration/FlexForms/Sandbox.xml";s:4:"c65b";s:36:"Configuration/FlexForms/Template.xml";s:4:"c65b";s:32:"Configuration/TCA/DataSource.php";s:4:"23e2";s:38:"Configuration/TypoScript/constants.txt";s:4:"8755";s:34:"Configuration/TypoScript/setup.txt";s:4:"1f26";s:35:"Configuration/Wizard/DataSource.php";s:4:"0624";s:43:"Configuration/Wizard/FlexFormCodeEditor.php";s:4:"36dc";s:33:"Configuration/Wizard/Template.php";s:4:"b66b";s:48:"Resources/Private/Elements/ExtJSApplication.html";s:4:"ed2f";s:38:"Resources/Private/Elements/Simple.html";s:4:"35e6";s:36:"Resources/Private/Elements/Test.html";s:4:"8e49";s:53:"Resources/Private/Elements/Display/AddressAndMap.html";s:4:"05fc";s:57:"Resources/Private/Elements/Display/AddressAndMapList.html";s:4:"1053";s:48:"Resources/Private/Elements/Display/FileList.html";s:4:"1a95";s:47:"Resources/Private/Elements/Display/Gallery.html";s:4:"9e6e";s:45:"Resources/Private/Elements/Display/Graph.html";s:4:"146f";s:43:"Resources/Private/Elements/Display/RSS.html";s:4:"ff72";s:50:"Resources/Private/Elements/Display/RecordList.html";s:4:"9b17";s:48:"Resources/Private/Elements/Display/Timeline.html";s:4:"a27e";s:46:"Resources/Private/Elements/Layout/Columns.html";s:4:"3dda";s:56:"Resources/Private/Elements/Layout/ContentRandomizer.html";s:4:"1f0a";s:54:"Resources/Private/Elements/Layout/JQueryAccordion.html";s:4:"da56";s:49:"Resources/Private/Elements/Layout/JQueryTabs.html";s:4:"837b";s:53:"Resources/Private/Elements/Layout/TextColumnizer.html";s:4:"1059";s:53:"Resources/Private/Elements/Navigation/BreadCrumb.html";s:4:"e0cb";s:51:"Resources/Private/Elements/Navigation/Redirect.html";s:4:"4852";s:47:"Resources/Private/Elements/Resource/Script.html";s:4:"3eeb";s:46:"Resources/Private/Elements/Resource/Style.html";s:4:"c0ea";s:40:"Resources/Private/Language/locallang.xml";s:4:"7ac3";s:75:"Resources/Private/Language/locallang_csh_tx_fed_domain_model_datasource.xml";s:4:"2030";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"7804";s:38:"Resources/Private/Layouts/Default.html";s:4:"4b70";s:34:"Resources/Private/Layouts/FCE.html";s:4:"5a0f";s:41:"Resources/Private/Pages/Page/Default.html";s:4:"0444";s:39:"Resources/Private/Pages/Page/Default.js";s:4:"c4e0";s:41:"Resources/Private/Pages/Page/Default.json";s:4:"307c";s:40:"Resources/Private/Pages/Page/Default.txt";s:4:"972c";s:40:"Resources/Private/Pages/Page/Default.xml";s:4:"0253";s:40:"Resources/Private/Pages/Page/Second.html";s:4:"1760";s:43:"Resources/Private/Partials/AutoFlexForm.xml";s:4:"e554";s:46:"Resources/Private/Partials/FileListEditor.html";s:4:"d012";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:40:"Resources/Private/Partials/Lightbox.html";s:4:"b6d7";s:53:"Resources/Private/Partials/DataSource/FormFields.html";s:4:"e6ea";s:46:"Resources/Private/Partials/DataSource/Model.js";s:4:"d4c5";s:53:"Resources/Private/Partials/DataSource/Properties.html";s:4:"8f49";s:48:"Resources/Private/Templates/DataSource/Edit.html";s:4:"1063";s:48:"Resources/Private/Templates/DataSource/List.html";s:4:"bc1d";s:47:"Resources/Private/Templates/DataSource/New.html";s:4:"7b0b";s:48:"Resources/Private/Templates/DataSource/Show.html";s:4:"79bf";s:43:"Resources/Private/Templates/Debug/Dump.html";s:4:"b88e";s:46:"Resources/Private/Templates/Debug/Results.html";s:4:"ee9e";s:44:"Resources/Private/Templates/Debug/Stack.html";s:4:"d012";s:45:"Resources/Private/Templates/Field/Button.html";s:4:"d41d";s:47:"Resources/Private/Templates/Field/Checkbox.html";s:4:"d41d";s:44:"Resources/Private/Templates/Field/Input.html";s:4:"d41d";s:44:"Resources/Private/Templates/Field/Radio.html";s:4:"d41d";s:45:"Resources/Private/Templates/Field/Select.html";s:4:"d41d";s:47:"Resources/Private/Templates/Field/Textarea.html";s:4:"d41d";s:70:"Resources/Private/Templates/FlexibleContentElement/BackendPreview.html";s:4:"0a7c";s:48:"Resources/Private/Templates/Profile/Summary.html";s:4:"6b31";s:45:"Resources/Private/Templates/Sandbox/Rest.html";s:4:"d41d";s:45:"Resources/Private/Templates/Sandbox/Show.html";s:4:"79df";s:43:"Resources/Private/Templates/Solr/Index.html";s:4:"0e59";s:53:"Resources/Private/Templates/Solr/Layouts/Default.html";s:4:"a344";s:48:"Resources/Private/Templates/Tool/ClearCache.html";s:4:"d41d";s:51:"Resources/Private/Templates/Tool/InspectCookie.html";s:4:"d41d";s:52:"Resources/Private/Templates/Tool/InspectSession.html";s:4:"d41d";s:49:"Resources/Public/Flash/com.roytanck.wpcumulus.fla";s:4:"f9a3";s:49:"Resources/Public/Flash/com.roytanck.wpcumulus.swf";s:4:"648d";s:52:"Resources/Public/Flash/com/roytanck/wpcumulus/Tag.as";s:4:"f1dc";s:57:"Resources/Public/Flash/com/roytanck/wpcumulus/TagCloud.as";s:4:"5fee";s:36:"Resources/Public/Icons/MapMarker.png";s:4:"5067";s:33:"Resources/Public/Icons/Plugin.png";s:4:"1889";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:31:"Resources/Public/Images/asc.gif";s:4:"a548";s:30:"Resources/Public/Images/bg.jpg";s:4:"962b";s:33:"Resources/Public/Images/close.png";s:4:"c4d6";s:34:"Resources/Public/Images/clouds.png";s:4:"6d56";s:32:"Resources/Public/Images/desc.gif";s:4:"f8a1";s:39:"Resources/Public/Images/pres_header.jpg";s:4:"c056";s:33:"Resources/Public/Images/ruler.jpg";s:4:"4f48";s:32:"Resources/Public/Images/sort.gif";s:4:"c01a";s:37:"Resources/Public/Images/test_icon.png";s:4:"f93e";s:34:"Resources/Public/Images/tickbg.jpg";s:4:"b34f";s:32:"Resources/Public/Images/wait.gif";s:4:"4a88";s:47:"Resources/Public/Images/Lightbox/closelabel.gif";s:4:"1daa";s:44:"Resources/Public/Images/Lightbox/loading.gif";s:4:"8213";s:46:"Resources/Public/Images/Lightbox/nextlabel.gif";s:4:"485d";s:46:"Resources/Public/Images/Lightbox/prevlabel.gif";s:4:"d935";s:37:"Resources/Public/Javascript/Base64.js";s:4:"4797";s:45:"Resources/Public/Javascript/DefaultSolrApp.js";s:4:"090c";s:45:"Resources/Public/Javascript/FileListEditor.js";s:4:"25c7";s:44:"Resources/Public/Javascript/FormValidator.js";s:4:"b0b4";s:40:"Resources/Public/Javascript/GearsInit.js";s:4:"87da";s:42:"Resources/Public/Javascript/HmacService.js";s:4:"b111";s:35:"Resources/Public/Javascript/SHA1.js";s:4:"fae5";s:47:"Resources/Public/Javascript/SandboxComponent.js";s:4:"9c7c";s:40:"Resources/Public/Javascript/Serialize.js";s:4:"eb9e";s:42:"Resources/Public/Javascript/SolrService.js";s:4:"f4fc";s:42:"Resources/Public/Javascript/Unserialize.js";s:4:"55a8";s:41:"Resources/Public/Javascript/Utf8Decode.js";s:4:"4537";s:41:"Resources/Public/Javascript/Utf8Encode.js";s:4:"11f7";s:71:"Resources/Public/Javascript/com/jquery/plugins/jquery.dataTables.min.js";s:4:"4847";s:68:"Resources/Public/Javascript/com/jquery/plugins/jquery.slimbox.min.js";s:4:"ce10";s:67:"Resources/Public/Javascript/com/plupload/js/plupload.browserplus.js";s:4:"5a01";s:61:"Resources/Public/Javascript/com/plupload/js/plupload.flash.js";s:4:"4386";s:62:"Resources/Public/Javascript/com/plupload/js/plupload.flash.swf";s:4:"520e";s:60:"Resources/Public/Javascript/com/plupload/js/plupload.full.js";s:4:"57a6";s:61:"Resources/Public/Javascript/com/plupload/js/plupload.gears.js";s:4:"193c";s:61:"Resources/Public/Javascript/com/plupload/js/plupload.html4.js";s:4:"1e13";s:61:"Resources/Public/Javascript/com/plupload/js/plupload.html5.js";s:4:"41c3";s:55:"Resources/Public/Javascript/com/plupload/js/plupload.js";s:4:"efdb";s:67:"Resources/Public/Javascript/com/plupload/js/plupload.silverlight.js";s:4:"1b65";s:90:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js";s:4:"53bf";s:95:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css";s:4:"cf51";s:85:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/backgrounds.gif";s:4:"cffe";s:90:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/buttons-disabled.png";s:4:"8c98";s:81:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/buttons.png";s:4:"a346";s:80:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/delete.gif";s:4:"c717";s:78:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/done.gif";s:4:"75ef";s:79:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/error.gif";s:4:"0451";s:82:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/throbber.gif";s:4:"c366";s:82:"Resources/Public/Javascript/com/plupload/js/jquery.plupload.queue/img/transp50.png";s:4:"6579";s:84:"Resources/Public/Javascript/com/plupload/js/jquery.ui.plupload/jquery.ui.plupload.js";s:4:"3524";s:89:"Resources/Public/Javascript/com/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css";s:4:"019e";s:82:"Resources/Public/Javascript/com/plupload/js/jquery.ui.plupload/img/plupload-bw.png";s:4:"d957";s:79:"Resources/Public/Javascript/com/plupload/js/jquery.ui.plupload/img/plupload.png";s:4:"1134";s:69:"Resources/Public/Javascript/com/timeglider/jquery-ui-1.8.5.custom.css";s:4:"9823";s:72:"Resources/Public/Javascript/com/timeglider/jquery-ui-1.8.9.custom.min.js";s:4:"c6d9";s:66:"Resources/Public/Javascript/com/timeglider/timeglider-0.0.7.min.js";s:4:"7b0a";s:37:"Resources/Public/Script/SolrProxy.php";s:4:"baaa";s:39:"Resources/Public/Stylesheet/Backend.css";s:4:"8ea3";s:38:"Resources/Public/Stylesheet/Common.css";s:4:"bd04";s:43:"Resources/Public/Stylesheet/MultiUpload.css";s:4:"bc87";s:46:"Resources/Public/Stylesheet/RecordSelector.css";s:4:"d41d";s:39:"Resources/Public/Stylesheet/Slimbox.css";s:4:"1cfe";s:36:"Resources/Public/Stylesheet/Solr.css";s:4:"6430";s:37:"Resources/Public/Stylesheet/Table.css";s:4:"a6d9";s:42:"Resources/Public/Stylesheet/Timeglider.css";s:4:"a46f";s:27:"Tests/Unit/BaseTestCase.php";s:4:"2e3d";s:73:"Tests/Unit/FlexibleContentElements/BaseFlexibleContentElementTestCase.php";s:4:"43ec";s:32:"Tests/Unit/Resource/FileTest.php";s:4:"2b61";s:30:"Tests/Unit/Utility/CDNTest.php";s:4:"27b9";s:39:"Tests/Unit/Utility/DocumentHeadTest.php";s:4:"9ac7";s:43:"Tests/Unit/Utility/DomainObjectInfoTest.php";s:4:"b2ad";s:32:"Tests/Unit/Utility/ExtJSTest.php";s:4:"b867";s:35:"Tests/Unit/Utility/GeocoderTest.php";s:4:"bfe4";s:31:"Tests/Unit/Utility/JSONTest.php";s:4:"2928";s:40:"Tests/Unit/Utility/PartialRenderTest.php";s:4:"45d4";s:31:"Tests/Unit/Utility/SASSTest.php";s:4:"dc11";s:43:"Tests/Unit/View/ExposedTemplateViewTest.php";s:4:"39f8";s:50:"Tests/Unit/View/FlexibleContentElementViewTest.php";s:4:"f06b";s:45:"Tests/Unit/ViewHelpers/CaseViewHelperTest.php";s:4:"6330";s:47:"Tests/Unit/ViewHelpers/CoffeeViewHelperTest.php";s:4:"714c";s:48:"Tests/Unit/ViewHelpers/CommentViewHelperTest.php";s:4:"e7a2";s:50:"Tests/Unit/ViewHelpers/CsspressoViewHelperTest.php";s:4:"338c";s:46:"Tests/Unit/ViewHelpers/DebugViewHelperTest.php";s:4:"de30";s:48:"Tests/Unit/ViewHelpers/FaviconViewHelperTest.php";s:4:"216a";s:43:"Tests/Unit/ViewHelpers/IfViewHelperTest.php";s:4:"4272";s:46:"Tests/Unit/ViewHelpers/ImageViewHelperTest.php";s:4:"f188";s:44:"Tests/Unit/ViewHelpers/MapViewHelperTest.php";s:4:"fcf4";s:45:"Tests/Unit/ViewHelpers/MathViewHelperTest.php";s:4:"deb8";s:44:"Tests/Unit/ViewHelpers/PdfViewHelperTest.php";s:4:"15ed";s:44:"Tests/Unit/ViewHelpers/RawViewHelperTest.php";s:4:"ff57";s:47:"Tests/Unit/ViewHelpers/RenderViewHelperTest.php";s:4:"9a98";s:49:"Tests/Unit/ViewHelpers/ResourceViewHelperTest.php";s:4:"e892";s:45:"Tests/Unit/ViewHelpers/SassViewHelperTest.php";s:4:"f138";s:47:"Tests/Unit/ViewHelpers/ScriptViewHelperTest.php";s:4:"2494";s:46:"Tests/Unit/ViewHelpers/StyleViewHelperTest.php";s:4:"da69";s:49:"Tests/Unit/ViewHelpers/TagCloudViewHelperTest.php";s:4:"d1c7";s:50:"Tests/Unit/ViewHelpers/Data/FuncViewHelperTest.php";s:4:"7953";s:50:"Tests/Unit/ViewHelpers/Data/JsonViewHelperTest.php";s:4:"832b";s:50:"Tests/Unit/ViewHelpers/Data/SortViewHelperTest.php";s:4:"aae1";s:52:"Tests/Unit/ViewHelpers/Data/SourceViewHelperTest.php";s:4:"d137";s:49:"Tests/Unit/ViewHelpers/Data/SqlViewHelperTest.php";s:4:"a378";s:49:"Tests/Unit/ViewHelpers/Data/VarViewHelperTest.php";s:4:"80d2";s:52:"Tests/Unit/ViewHelpers/Debug/BeginViewHelperTest.php";s:4:"7086";s:50:"Tests/Unit/ViewHelpers/Debug/DieViewHelperTest.php";s:4:"d136";s:51:"Tests/Unit/ViewHelpers/Debug/DumpViewHelperTest.php";s:4:"3981";s:50:"Tests/Unit/ViewHelpers/Debug/EndViewHelperTest.php";s:4:"4f26";s:50:"Tests/Unit/ViewHelpers/Debug/LapViewHelperTest.php";s:4:"13ff";s:52:"Tests/Unit/ViewHelpers/Debug/StackViewHelperTest.php";s:4:"e766";s:56:"Tests/Unit/ViewHelpers/Debug/VariablesViewHelperTest.php";s:4:"d5a3";s:50:"Tests/Unit/ViewHelpers/ExtJS/AppViewHelperTest.php";s:4:"b331";s:56:"Tests/Unit/ViewHelpers/ExtJS/ComponentViewHelperTest.php";s:4:"407a";s:53:"Tests/Unit/ViewHelpers/ExtJS/ExposeViewHelperTest.php";s:4:"5358";s:52:"Tests/Unit/ViewHelpers/ExtJS/ThemeViewHelperTest.php";s:4:"bb27";s:57:"Tests/Unit/ViewHelpers/JQuery/AccordionViewHelperTest.php";s:4:"f38a";s:51:"Tests/Unit/ViewHelpers/JQuery/CdnViewHelperTest.php";s:4:"7e3c";s:62:"Tests/Unit/ViewHelpers/JQuery/ContentRotatorViewHelperTest.php";s:4:"e798";s:51:"Tests/Unit/ViewHelpers/JQuery/TabViewHelperTest.php";s:4:"12af";s:52:"Tests/Unit/ViewHelpers/Map/GeocodeViewHelperTest.php";s:4:"10f8";s:50:"Tests/Unit/ViewHelpers/Map/LayerViewHelperTest.php";s:4:"d2a7";s:51:"Tests/Unit/ViewHelpers/Map/MarkerViewHelperTest.php";s:4:"cade";s:50:"Tests/Unit/ViewHelpers/Map/TableViewHelperTest.php";s:4:"d5c7";s:57:"Tests/Unit/ViewHelpers/Resource/ArchiveViewHelperTest.php";s:4:"b31e";s:54:"Tests/Unit/ViewHelpers/Resource/FileViewHelperTest.php";s:4:"b888";s:55:"Tests/Unit/ViewHelpers/Resource/ImageViewHelperTest.php";s:4:"b298";s:59:"Tests/Unit/ViewHelpers/TagCloud/TagOccurrenceViewHelper.php";s:4:"e5e7";s:49:"Tests/Unit/ViewHelpers/TagCloud/TagViewHelper.php";s:4:"529b";s:59:"Tests/Unit/ViewHelpers/Tools/CacheControlViewHelperTest.php";s:4:"3a0c";s:60:"Tests/Unit/ViewHelpers/Tools/CookieControlViewHelperTest.php";s:4:"342e";s:61:"Tests/Unit/ViewHelpers/Tools/SessionControlViewHelperTest.php";s:4:"9913";s:14:"doc/manual.sxw";s:4:"0dba";}',
);

?>