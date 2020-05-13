import React from 'react'; // eslint-disable-line no-unused-vars
import { __ } from '@wordpress/i18n';
import { PanelBody } from '@wordpress/components';

export const ExampleOptions = () => {
  return (
    <PanelBody title={__('Example Details', 'whatever')}>
    </PanelBody>
  );
};
