const getBrandToplist = async (countryCode = null) => {
    const headers = new Headers();

    if (countryCode) {
        headers.append('CF-IPCountry', countryCode);
    }

    const response = await fetch('/api/brands/toplist', {
        method: 'GET',
        headers: headers,
        redirect: 'follow'
    });

    if (!response.ok) {
        throw new Error('Network response error: ' + response.statusText);
    }

    const data = await response.json();

    return data;
}

const buildBrandElement = (brand, key = false) => {
    if (document.querySelector(`[data-brand="${brand.brand_id}"]`)) {
        return '';
    }

    const starIcons = '⭐'.repeat(brand.rating);
    const verifiedIcon = 'https://www.casinoonlinefrancais.info/img/commons/bcel/icon_verified.svg';

    return `
    <div class="toplist-container_brands_item" data-brand="${brand.brand_id}">
        <div class="brand-top">
            <div class="brand-top_number border">
                <span>${key ?? brand.brand_id}</span>
            </div>
            <div class="brand-top_logo border">
                <img src="${brand.brand_image}" alt="${brand.brand_name} logo">
            </div>
            <div class="brand-top_name border">
                <div class="brand-rating-stars">
                    <div class="brand-rating">${brand.rating}</div>
                    <div class="brand-stars">${starIcons}</div>
                </div>
                <div class="brand-name">
                    ${brand.verified ? `<img src="${verifiedIcon}" alt="verified icon" loading="lazy" height="18px" width="18px" title="Certified by CasinoOnlineFrancais.info">` : ''}
                    ${brand.brand_name}
                </div>
            </div>

            ${brand.bonus_title
            ? `<div class="brand-top_bonus border">
                        ${brand.bonus_title}
                        ${brand.bonus_subtitle ? `<span>${brand.bonus_subtitle}</span>` : ''}
                    </div>`
            : ''
        }

            <div class="brand-top_actions border">
                <a href="${brand.website}" class="get-bonus">Obtenir le bonus</a>
                <a href="${brand.website}" class="visit-website">Visiter le site</a>
            </div>
        </div>

        ${brand.description
            ? `<div class="brand-terms">
                    <div>${brand.description}</div>
                </div>`
            : ''
        }
    </div>
    `;
};

const refecthBrandToplist = async () => {
    // fake sleep
    // await new Promise((resolve) => setTimeout(resolve, 1000));

    const brandContainer = document.querySelector('#brand-container');
    const loading = document.querySelector('#loading');

    brandContainer.innerHTML = '';
   

    loading.style.display = 'block';

    const countryCode = document.querySelector('#country-code').value;
    const brands = await getBrandToplist(countryCode === 'all' ? null : countryCode);

    brands.forEach((brand, key) => {
        const brandElement = buildBrandElement(brand, key + 1);
        brandContainer.insertAdjacentHTML('beforeend', brandElement);
    });

    if (brands.length === 0) {
        brandContainer.insertAdjacentHTML('beforeend', '<div style="margin: auto; padding: 2em" class="no-brands">Aucune marque trouvée</div>');
    }

    loading.style.display = 'none';
};

window.onload = async () => {
    refecthBrandToplist();
    document.querySelector('#country-code').addEventListener('change', async (event) => {
        refecthBrandToplist();
    });
}
