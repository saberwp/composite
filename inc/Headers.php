<?php
namespace Composite;

/**
 * Class Headers
 *
 * A class for managing a list of headers in a composite structure.
 */
class Headers
{
    /**
     * An array of headers
     *
     * @var array
     */
    protected $headers = array();

    /**
     * Adds a header to the list of headers
     *
     * @param mixed $header The header to be added
     */
    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    /**
     * Returns an array of all the headers in the list
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Loads the header components from the /components/headers/ directory
     */
    public function loadHeaderComponents()
    {
        // Get a list of all the directories in /components/headers/
        $header_dir = get_template_directory() . '/components/headers/';
        $directories = array_filter(glob($header_dir . '*'), 'is_dir');

        // Iterate over each directory and load the component data
        foreach ($directories as $directory) {
            // Load the manifest.json file
            $manifest_file = $directory . '/manifest.json';
            if (file_exists($manifest_file)) {
                $manifest_data = json_decode(file_get_contents($manifest_file), true);

                // Load the component.php file
                $component_file = $directory . '/component.php';
                if (file_exists($component_file)) {
                    // Store the component data in the headers property
                    $this->headers[] = array(
                        'manifest' => $manifest_data,
                        'component' => $component_file
                    );
                }
            }
        }
    }

    /**
     * Initialize the Headers class and setup the header default field
     */
    public function init()
    {
				$this->loadHeaderComponents();
        $this->headerDefaultFieldSetup();
    }

    /**
     * Setup the header default field by replacing the choices with
     * the list of headers loaded from the /components/headers/ directory
     */
    public function headerDefaultFieldSetup()
    {
        add_filter('acf/load_field/name=header_default', function ($field) {
            $choices = array();
            foreach ($this->headers as $header) {
                $manifest = $header['manifest'];
                $choices[$manifest['name']] = $manifest['title'];
            }
            $field['choices'] = $choices;
            return $field;
        });
    }
}
