<?php
 /*
 * @package SimplePie
 * @version 1.3.1
 * @copyright 2004-2012 Ryan Parman, Geoffrey Sneddon, Ryan McCue
 * @author Ryan Parman
 * @author Geoffrey Sneddon
 * @author Ryan McCue
 * @link http://simplepie.org/ SimplePie
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */


// autoloader
spl_autoload_register(array(new SimplePie_Autoloader(), 'autoload'));

if (!class_exists('SimplePie'))
{
	trigger_error('Autoloader not registered properly', E_USER_ERROR);
}

/**
 * Autoloader class
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie_Autoloader
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library';
	}

	/**
	 * Autoloader
	 *
	 * @param string $class The name of the class to attempt to load.
	 */
	public function autoload($class)
	{
		// Only load the class if it starts with "SimplePie"
		if (strpos($class, 'SimplePie') !== 0)
		{
			return;
		}

		$filename = $this->path . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
		include $filename;
	}
}
?>

<?php 

	$feed = new SimplePie();
	$feed->set_feed_url('https://salon.thefamily.co/feed');
	$feed->init();
	$feed->handle_content_type();
?>

	<?php $limit = 3 ?>


	<h2>Articles <a href="#" target="_blank"><i class="fa fa-external-link"></i></a></h2>
	<div class="row mb">
		<?php foreach ($feed->get_items() as $item) : ?>
			<?php if ($limit != 0) : ?>
				<div class="col-sm-4">
					
					<?php 
						require_once('library/simple_html_dom.php');
						$htmlDOM = new simple_html_dom();
						$htmlDOM->load($item->get_description());
						$image = $htmlDOM->find('img', 0); 
					?>
					<a href="<?php echo $item->get_permalink(); ?>" target="_blank">
						<div class="project-img" style="background-image:url('<?php echo $image->src ?>')">
						</div>
						<h3><?php echo $item->get_title(); ?></h3>
					</a>
				</div>
				<?php $limit-- ?>
			<?php endif ?>
		<?php endforeach ?>
	</div>


