<?php
namespace Composite;

/**
 * Class Footers
 *
 * A class for managing a list of footers in a composite structure.
 */
class Footers
{
    /**
     * An array of footers
     *
     * @var array
     */
    protected $footers = array();

    /**
     * Adds a footer to the list of footers
     *
     * @param mixed $footer The footer to be added
     */
    public function addFooter($footer)
    {
        $this->footers[] = $footer;
    }

    /**
     * Returns an array of all the footers in the list
     *
     * @return array
     */
    public function getFooters()
    {
        return $this->footers;
    }

    /**
     * Loads the footer components from the /components/footers/ directory
     */
    public function loadFooterComponents()
    {
        // Get a list of all the directories in /components/footers/
        $footer_dir = get_template_directory() . '/components/footers/';
        $directories = array_filter(glob($footer_dir . '*'), 'is_dir');

        // Iterate over each directory and load the component data
        foreach ($directories as $directory) {
            // Load the manifest.json file
            $manifest_file = $directory . '/manifest.json';
            if (file_exists($manifest_file)) {
                $manifest_data = json_decode(file_get_contents($manifest_file), true);

                // Load the component.php file
                $component_file = $directory . '/component.php';
                if (file_exists($component_file)) {
                    // Store the component data in the footers property
                    $this->footers[] = array(
                        'manifest' => $manifest_data,
                        'component' => $component_file
                    );
                }
            }
        }
    }

    /**
     * Initialize the Footers class and setup the footer default field
     */
    public function init()
    {
				$this->loadFooterComponents();
        $this->footerDefaultFieldSetup();
    }

    /**
     * Setup the footer default field by replacing the choices with
     * the list of footers loaded from the /components/footers/ directory
     */
    public function footerDefaultFieldSetup()
    {
        add_filter('acf/load_field/name=footer_default', function ($field) {
            $choices = array();
            foreach ($this->footers as $footer) {
                $manifest = $footer['manifest'];
                $choices[$manifest['name']] = $manifest['title'];
            }
            $field['choices'] = $choices;
            return $field;
        });
    }
}
