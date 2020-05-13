import React from 'react'; // eslint-disable-line no-unused-vars
import { __ } from '@wordpress/i18n';
import { PanelBody } from '@wordpress/components';
import { ButtonOptions } from '../../../components/button/components/button-options';

export const JumbotronOptions = ({ attributes, actions }) => {
  const {
    button,
  } = attributes;

  const {
    onChangeButtonTitle,
    onChangeButtonUrl,
    onChangeButtonStyleSize,
    onChangeButtonStyleColor,
    onChangeButtonStyleSizeWidth,
    onChangeButtonId,
  } = actions;

  const buttonObject = (typeof button === 'undefined') || button;

  return (
    <PanelBody title={__('Jumbotron Details', 'whatever')}>

      <ButtonOptions
        button={buttonObject}
        onChangeTitle={onChangeButtonTitle}
        onChangeUrl={onChangeButtonUrl}
        onChangeStyleSize={onChangeButtonStyleSize}
        onChangeStyleColor={onChangeButtonStyleColor}
        onChangeStyleSizeWidth={onChangeButtonStyleSizeWidth}
        onChangeId={onChangeButtonId}
      />

    </PanelBody>
  );
};
