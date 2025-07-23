# Receta: Galería de Imágenes para Drupal 11

## Descripción
Sistema completo para crear y gestionar galerías de imágenes con categorías, filtros, formatos avanzados y metadatos optimizados para SEO y accesibilidad.

## Instalación
1. Copia la carpeta `image_gallery_recipe` en tu directorio de recetas.
2. Ejecuta el proceso de instalación/importación de la receta desde la interfaz de Drupal o Drush.
3. Verifica que los módulos requeridos estén habilitados: node, field, image, taxonomy, views, text, colorbox/photoswipe, views_bootstrap.

## Personalización
- Puedes modificar los estilos de imagen en `config/install/image.style.*.yml`.
- Agrega o edita categorías en `content/gallery_categories.yml`.
- Añade galerías de ejemplo en `content/sample_galleries.yml`.

## Buenas Prácticas
- Usa texto alternativo (alt) descriptivo en todas las imágenes.
- Prioriza la experiencia móvil y el diseño responsivo.
- Configura lazy loading y caché en vistas para rendimiento.
- Exporta y versiona todos los archivos YAML.
- Revisa accesibilidad (WCAG 2.1) y SEO en metadatos.

## Migración
Para migrar galerías desde otros sistemas, adapta el formato de `sample_galleries.yml` y asegúrate de que las imágenes estén en `assets/sample_images/`.

## Soporte
Esta receta está pensada para fotógrafos, portales turísticos, sitios corporativos y blogs personales que requieran galerías visuales avanzadas.

---

**Criterios de Éxito:**
- Instalación limpia y sin conflictos.
- Filtrado y visualización responsiva.
- Lightbox y navegación entre imágenes.
- Rendimiento optimizado.
- Accesibilidad y SEO garantizados.
