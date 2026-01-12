// Тут генерируется чистый HTML, который сохраняется в контенте поста.
import {
	useBlockProps, // Генерирует пропсы для основного контейнера
	InnerBlocks, // Позволяет вставлять вложенные блоки
} from '@wordpress/block-editor';

export function save({attributes}) {
	const {memberLink, cartLink} = attributes; // Деструктуризация атрибутов блока
	return (
		<div {...useBlockProps.save()}>
			<div className="inner-header">
				<InnerBlocks.Content/>
				<div className="right-section">
					<div className="header-search"></div>
					<div className="header-mode-switcher"></div>
					{cartLink && (
						<div className="header-cart-link">
							<a href={cartLink}></a>
						</div>
					)}
					{memberLink && (
						<div className="header-member-link">
							<a href={memberLink}>Member Area</a>
						</div>
					)}
				</div>
			</div>
		</div>
	);
}
