import React from 'react'; // eslint-disable-line no-unused-vars
import { __ } from '@wordpress/i18n';
import { PanelBody } from '@wordpress/components';
import { ButtonOptions as ButtonOptionsComponent } from '../../../components/button/components/button-options';

export const ButtonOptions = ({ attributes, actions }) => {
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
    <PanelBody title={__('Button Details', 'whatever')}>

      <ButtonOptionsComponent
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
