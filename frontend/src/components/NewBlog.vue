<template>
    <section class="news-blog">
      <h2 class="text-22">News & Blog</h2>
      <div class="cards-4">
        <div v-for="(article, index) in newsArticles" :key="index" class="card-13">
          <div class="div-12">
            <img :src="article.image" :alt="article.title" class="img-57" />
            <div class="label">News</div>
          </div>
          <div class="text-23">
            <div class="article-date">{{ article.date }}</div>
            <div class="article-title">{{ article.title }}</div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    data() {
      return {
        newsArticles: [
          {
            date: '24 May, 2024',
            title: 'Urna cras et mauris congue nunc nisi nec tempus cursus',
            image: 'http://b.io/ext_93-',
          },
          {
            date: '24 May, 2024',
            title: 'Id tellus dignissim eu nisl aliquam. Massa id interdum',
            image: 'http://b.io/ext_94-',
          },
          {
            date: '24 May, 2024',
            title: 'Mus cursus pellentesque blandit tortor suspendisse ornare',
            image: 'http://b.io/ext_95-',
          },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .news-blog {
    display: flex;
    width: 100%;
    flex-direction: column;
    align-items: center;
    font-family: Poppins, sans-serif;
    justify-content: start;
    padding: 60px 72px;
  }
  @media (max-width: 991px) {
    .news-blog {
      max-width: 100%;
      padding: 0 20px;
    }
  }
  .text-22 {
    font-size: 40px;
    color: rgba(0, 0, 0, 1);
    font-weight: 600;
    line-height: 1.2;
  }
  .cards-4 {
    display: flex;
    margin-top: 60px;
    align-items: end;
    gap: 22px;
    justify-content: start;
    flex-wrap: wrap;
  }
  @media (max-width: 991px) {
    .cards-4 {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .card-13 {
    border-radius: 20px;
    display: flex;
    min-width: 240px;
    flex-direction: column;
    overflow: hidden;
    justify-content: start;
    width: 416px;
  }
  .div-12 {
    display: flex;
    flex-direction: column;
    position: relative;
    aspect-ratio: 1.156;
    width: 100%;
    max-width: 416px;
    overflow: hidden;
    align-items: start;
    font-size: 16px;
    color: var(--Default-White, #fff);
    font-weight: 600;
    white-space: nowrap;
    padding: 20px 20px 312px;
  }
  @media (max-width: 991px) {
    .div-12 {
      padding-bottom: 100px;
      white-space: initial;
    }
  }
  .img-57 {
    position: absolute;
    inset: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
  }
  .label {
    position: relative;
    leading-trim: both;
    text-edge: cap;
    align-self: stretch;
    border-radius: 20px;
    background: var(--Default-Black, #000);
    background-color: var(--Default-Black, #000);
    margin-bottom: -62px;
    min-height: 28px;
    gap: 10px;
    overflow: hidden;
    padding: 9px 28px;
  }
  @media (max-width: 991px) {
    .label {
      margin-bottom: 10px;
      white-space: initial;
      padding: 0 20px;
    }
  }
  .text-23 {
    display: flex;
    max-width: 100%;
    width: 416px;
    flex-direction: column;
    line-height: 32px;
    justify-content: start;
    padding: 20px 0;
  }
  .article-date {
    color: rgba(0, 0, 0, 0.6);
    font-size: 16px;
    font-weight: 400;
  }
  .article-title {
    color: rgba(0, 0, 0, 1);
    font-size: 20px;
    font-weight: 600;
    margin-top: 12px;
  }
  </style>