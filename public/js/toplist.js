const getBrandToplist = async () => {
    const response = await fetch('/api/brands/toplist');

    if (!response.ok) {
        throw new Error('Network response error: ' + response.statusText);
    }

    const data = await response.json();

    return data;
}

const buildBrandElement = (brand) => {
    if (document.querySelector(`[data-brand="${brand.brand_id}"]`)) {
        return '';
    }

    const starIcons = '⭐'.repeat(brand.stars);
    const verifiedIcon = 'https://www.casinoonlinefrancais.info/img/commons/bcel/icon_verified.svg';

    return `
    <div class="toplist-container_brands_item" data-brand="${brand.brand_id}">
        <div class="brand-top">
            <div class="brand-top_number border">
                <span>${brand.brand_id}</span>
            </div>
            <div class="brand-top_logo border">
                <img src="${brand.brand_image}" alt="${brand.name} logo">
            </div>
            <div class="brand-top_name border">
                <div class="brand-rating-stars">
                    <div class="brand-rating">${brand.rating}</div>
                    <div class="brand-stars">${starIcons}</div>
                </div>
                <div class="brand-name">
                    ${brand.verified ? `<img src="${verifiedIcon}" alt="verified icon" loading="lazy" height="18px" width="18px" title="Certified by CasinoOnlineFrancais.info">` : ''}
                    ${brand.name}
                </div>
            </div>

            ${
                brand.bonusTitle
                    ? `<div class="brand-top_bonus border">
                        ${brand.bonusTitle}
                        ${brand.bonusSubtitle ? `<span>${brand.bonusSubtitle}</span>` : ''}
                    </div>`
                    : ''
            }

            <div class="brand-top_actions border">
                <a href="${brand.bonusLink}" class="get-bonus">Obtenir le bonus</a>
                <a href="${brand.website}" class="visit-website">Visiter le site</a>
            </div>
        </div>

        ${
            brand.description
                ? `<div class="brand-terms">
                    <div>${brand.description}</div>
                </div>`
                : ''
        }
    </div>
    `;
};


window.onload = async () => {
    const brandContainer = document.querySelector('#brand-container');
    const loading = document.querySelector('#loading');

    const brands = await getBrandToplist();

    brands.forEach((brand) => {
        const brandElement = buildBrandElement(brand);
        brandContainer.insertAdjacentHTML('beforeend', brandElement);
    });

    if(brands.length === 0) {
        brandContainer.insertAdjacentHTML('beforeend', '<div style="margin: auto; padding: 2em" class="no-brands">Aucune marque trouvée</div>');
    }

    loading.style.display = 'none';
}

