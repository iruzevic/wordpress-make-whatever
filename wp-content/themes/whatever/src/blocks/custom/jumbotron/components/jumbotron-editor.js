import React from 'react'; // eslint-disable-line no-unused-vars
import classnames from 'classnames';
import { __ } from '@wordpress/i18n';
import { RichText } from '@wordpress/block-editor';
import { ImageEditor } from './../../../components/image/components/image-editor';
import { ButtonEditor } from '../../../components/button/components/button-editor';

export const JumbotronEditor = ({ attributes, actions }) => {
  const {
    blockClass,
    intro,
    heading,
    paragraph,
    media,
    button,
    contentHorizontalPosition,
    contentVerticalPosition,
    mediaHorizontalPosition,
  } = attributes;

  const {
    onChangeIntro,
    onChangeHeading,
    onChangeParagraph,
    onChangeMedia,
  } = actions;

  const mediaObject = (typeof media === 'undefined') || media;

  const buttonObject = (typeof button === 'undefined') || button;

  return (
    <div className={blockClass}>
      <div className={classnames(`${blockClass}__media`, `${blockClass}__media--horizontal-${mediaHorizontalPosition}`)}>
        <ImageEditor
          blockClass={blockClass}
          media={mediaObject}
          onChangeMedia={onChangeMedia}
        />
      </div>

      <div className={classnames(
        `${blockClass}__content`,
        `${blockClass}__content--vertical-${contentVerticalPosition}`,
        `${blockClass}__content--horizontal-${contentHorizontalPosition}`,
      )}>
        <div className={`${blockClass}__content-wrap`}>
          <div className={`${blockClass}__intro`}>
            <RichText
              placeholder={__('Add Intro', 'whatever')}
              className={`${blockClass}__intro`}
              onChange={onChangeIntro}
              value={intro}
            />
          </div>

          <div className={`${blockClass}__heading`}>
            <RichText
              placeholder={__('Add Heading', 'whatever')}
              className={`${blockClass}__heading`}
              onChange={onChangeHeading}
              value={heading}
            />
          </div>
          
          <div className={`${blockClass}__paragraph`}>
            <RichText
              placeholder={__('Add Paragraph', 'whatever')}
              className={`${blockClass}__paragraph`}
              onChange={onChangeParagraph}
              value={paragraph}
            />
          </div>

          <ButtonEditor
            blockClass={blockClass}
            button={buttonObject}
          />
        </div>
      </div>
    </div>
  );
};
