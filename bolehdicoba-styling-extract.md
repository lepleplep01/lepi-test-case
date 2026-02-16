# Boleh Dicoba (bolehdicoba.com) - CSS & Styling Extract

> **Note:** The URL `https://bolehdicoba.com/wp-content/themes/flavor/style.css` returns 404. The site uses **Hello Elementor** parent theme + **hello-elementor-child** child theme, not "flavor".

---

## 1. Font Families

### Custom @font-face (hosted on site)
| Font Name | Weight | Source |
|-----------|--------|--------|
| **PlayfairDisplay-Italic** | 400 | `wp-content/uploads/2024/08/PlayfairDisplay-Italic.ttf` |
| **Gelion Bold** | 700 | `wp-content/uploads/2024/08/Gelion-Bold.ttf` |
| **Gelion 600** | 600 | `wp-content/uploads/2024/08/Gelion-SemiBold.ttf` |
| **Gelion** | 400 | `wp-content/uploads/2024/08/Gelion-Regular.ttf` |
| **Doppelganger** | 400 | `wp-content/uploads/2024/08/Doppelganger-Display-400.otf` |
| **DelaGothicOne** | - | `wp-content/uploads/2024/06/DelaGothicOne-Regular.ttf` |
| **Outfit** | variable | `wp-content/uploads/2024/06/Outfit-VariableFont_wght.ttf` |

### Google Fonts (CDN)
| Font | Usage |
|------|-------|
| **Playfair** | `https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900` |
| **Outfit** | `https://fonts.googleapis.com/css2?family=Outfit:wght@100..900` |
| **Roboto** | weights 100-900 + italic |
| **Roboto Slab** | weights 100-900 + italic |
| **Open Sans** | `//fonts.googleapis.com/css?family=Open+Sans` |

### Primary font stack (body)
```css
body { font-family: "Outfit", sans-serif; }
```

### Utility classes
- `.delagothicone-font` → DelaGothicOne
- `.outfit-font` → Outfit
- `.doppelganger-font-regular` → Doppelganger
- `.playfair-font-italic` → PlayfairDisplay-Italic
- `.gelion-font-regular` → Gelion
- `.gelion-font-medium` → Gelion 600
- `.gelion-font-bold` → Gelion Bold

---

## 2. Color Hex Codes

### Primary palette (site-specific)
| Role | Hex | Usage |
|------|-----|-------|
| **Primary (brand)** | `#4d7bc8` | Primary buttons, active states, links |
| **Secondary (accent)** | `#ffb14c` | Buttons, highlights, hover states, badges |
| **Text primary** | `#222` / `#222222` | Headings, body text |
| **Text muted** | `#999` | Inactive nav, category items |
| **Background** | `#fff` | Main background |
| **Background warm** | `#f7f4f2` | Single post, case study body |
| **Background cream** | `#f4f0ea` | Article cards |
| **Footer primary** | `#513b6a` | Main footer area |
| **Footer bottom** | `#131313` | Footer bottom bar |
| **Footer brown variant** | `#eee9df` | `.footer-brown` |
| **Link / accent** | `#513b6a` | Links in content, pagination active |
| **Teal accent** | `#33b8a5` | Menu "See Service" links |
| **Highlight orange** | `#ffb14c` | `.highlight-orange` |
| **Highlight red** | `#fc5649` | `.highlight-red`, NEW badge |
| **Border** | `#222` | Cards, buttons, sections |
| **Border light** | `#d9d4cb` | Dividers, submenu |
| **Subscribe section** | `#a1ded6` | Newsletter subscribe form bg |
| **Article image bg** | `#c8d6ee` | Single article hero background |
| **Circle accent 1** | `#746288` | Page content indicators |
| **Circle accent 2** | `#ffc170` | Page content indicators |
| **Circle accent 3** | `#7195d3` | Page content indicators |
| **Circle accent 4** | `#5cc6b7` | Page content indicators |

### Elementor global (from kit-6)
| Variable | Value |
|----------|-------|
| `--e-global-color-primary` | `#6EC1E4` |
| `--e-global-color-secondary` | `#54595F` |
| `--e-global-color-text` | `#7A7A7A` |
| `--e-global-color-accent` | `#61CE70` |

> These Elementor defaults are largely overridden by child theme and custom CSS.

### WordPress preset colors (in `:root`)
- `--wp--preset--color--black`: `#000000`
- `--wp--preset--color--white`: `#ffffff`
- `--wp--preset--color--vivid-red`: `#cf2e2e`
- `--wp--preset--color--luminous-vivid-orange`: `#ff6900`
- `--wp--preset--color--luminous-vivid-amber`: `#fcb900`
- `--wp--preset--color--vivid-green-cyan`: `#00d084`
- `--wp--preset--color--vivid-cyan-blue`: `#0693e3`
- `--wp--preset--color--vivid-purple`: `#9b51e0`
- Others: pale-pink, light-green-cyan, pale-cyan-blue, cyan-bluish-gray

---

## 3. CSS Custom Properties / Variables

### Elementor (global.css references)
```css
--e-global-color-primary
--e-global-color-secondary
--e-global-color-text
--e-global-color-accent
--e-global-typography-primary-font-family
--e-global-typography-primary-font-weight
--e-global-typography-secondary-font-family
--e-global-typography-secondary-font-weight
--e-global-typography-text-font-family
--e-global-typography-text-font-weight
--e-global-typography-accent-font-family
--e-global-typography-accent-font-weight
```

### Elementor kit-6 values
```css
.elementor-kit-6 {
  --e-global-color-primary: #6EC1E4;
  --e-global-color-secondary: #54595F;
  --e-global-color-text: #7A7A7A;
  --e-global-color-accent: #61CE70;
  --e-global-typography-primary-font-family: "Roboto";
  --e-global-typography-primary-font-weight: 600;
  --e-global-typography-secondary-font-family: "Roboto Slab";
  --e-global-typography-secondary-font-weight: 400;
  --e-global-typography-text-font-family: "Roboto";
  --e-global-typography-text-font-weight: 400;
  --e-global-typography-accent-font-family: "Roboto";
  --e-global-typography-accent-font-weight: 500;
}
```

### Container
```css
--container-max-width: 1140px;
--widgets-spacing: 20px 20px;
```

### WordPress presets (excerpt)
- Aspect ratios, colors, gradients, font sizes, spacing, shadows
- See full `:root` block in page source for complete list

---

## 4. Header Styling

| Property | Value |
|----------|-------|
| **Background** | `#fff` (default) / `transparent` (`.header-transparent`) |
| **Height** | `80px` |
| **Position** | `fixed`, `top: 0`, `z-index: 20` |
| **Padding (inner)** | `0 50px` desktop / `15px` mobile |
| **Menu gap** | `18px` |
| **Submenu background** | `#f7f5f0` |
| **Submenu border** | `0.5px solid #d9d4cb` |
| **Transparent header nav color** | `#fff` (`.header-black-transparent`) |

### Mobile
- Logo height: `30px`
- Toggle: transparent background, 24px

---

## 5. Footer Styling

| Section | Background |
|---------|------------|
| **Main footer** | `#f7f4f2` (default) |
| **Footer variant `.footer-black-transparent`** | `#1f1f1f` |
| **Footer variant `.footer-brown`** | `#eee9df` |
| **Footer main area (`.footer-container-top`)** | `#513b6a` |
| **Footer bottom (`.footer-container-bottom`)** | `#131313` |
| **Border radius (top)** | `60px 60px 0 0` |

### Footer typography
- Titles: `#fff`, 36px/24px
- Descriptions: `#fff`, 16px, 300
- Links: `rgba(255, 255, 255, 0.7)`
- Accent: `#ffb14c` (e.g. contact span)
- Newsletter input: `#222` bg, `#fff` text; focus: `#fff` bg, `#222` text

### Mobile
- Footer bg: `#fff`
- Footer bottom padding: `20px 0`

---

## 6. Button Colors & Styles

### Primary (`.btn-branding-primary`)
| Property | Value |
|----------|-------|
| Background | `#4d7bc8` |
| Hover background | `#1c1c1c` |
| Color | `#fff` |
| Border | `2px solid #222` |
| Border radius | `8px` |
| Padding | `11px 18px` |
| Font | 16px, 700 |

### Secondary (`.btn-branding-secondary`)
| Property | Value |
|----------|-------|
| Background | `#ffb14c` |
| Hover background | `#E8A145` |
| Hover shadow | `4px 4px 0px 0px #222` |
| Color | `#000` |
| Border | `2px solid #222222` |
| Border radius | `8px` |
| Padding | `13px 20px` |
| Font | 16px, 500 |

### Subscribe form button
- Background: `#ffb14c`
- Border: `2px solid #222`
- Hover: `#222` bg, white text

### Article link hover
- Background: `#ffb14c`
- Shadow: `6px 6px 0px #222`

### Classic block buttons (WP)
- Background: `#32373c`
- Color: `#fff`
- Border radius: `9999px`

---

## 7. Section Background Colors

| Section / Element | Background |
|-------------------|------------|
| **Body (single post)** | `#f7f4f2` |
| **Article card** | `#f4f0ea` |
| **Article card (case study)** | `#fff` |
| **Subscribe form** | `#a1ded6` |
| **Single article image** | `#c8d6ee` |
| **Highlight article** | `#fff` (border `2px solid #222`) |
| **Know more section** | `#fff` (border `2px solid #222`) |
| **Footer top** | `#513b6a` |
| **Footer bottom** | `#131313` |
| **Submenu items** | `#f7f5f0` |
| **Pagination active** | `#513b6a` |
| **Homepage about (mobile)** | `#ffb14c` |
| **Partner cards (mobile)** | `#fff` |
| **Progress bar** | `#ffffff` |

---

## 8. CSS Links in `<head>`

1. `hello-elementor/style.css` (parent theme)
2. `hello-elementor-child/custom.css`
3. `hello-elementor-child/style.css`
4. Bootstrap 5.0.2
5. Font Awesome 6.1.1
6. Line Awesome 1.3.0
7. Swiper 8.4.5
8. Animate.css 4.1.1
9. Owl Carousel 2.3.4
10. Slick Carousel 1.8.1
11. Elementor frontend + post CSS
12. Elementor global.css
13. Google Fonts (Roboto, Roboto Slab, Outfit, Open Sans)
14. TranslatePress language switcher
15. Ajax Search Lite

---

## 9. Animations

### Custom keyframes
- `transformanimate` – scale 1 → 1.3
- `moveanimate` – translate + scale
- `rotatebag` – translateY + rotate

---

## 10. Breakpoints

- `750px` – main mobile breakpoint
- `768px`
- `900px`
- `1000px`
- `1024px` – container max-width
- `1367px`
- `640px`
