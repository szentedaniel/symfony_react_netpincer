import i18next from 'i18next';

import React from 'react';
import en from './i18n/en';
import tr from './i18n/tr';
import ar from './i18n/ar';

// const ExampleConfig = {
//   settings: {
//     layout: {
//       config: {},
//     },
//   },
//   routes: [
//     {
//       path: 'example',
//       element: <Example />,
//     },
//   ],
// };
//
// export default ExampleConfig;

/**
 * Lazy load Example
 */

i18next.addResourceBundle('en', 'examplePage', en);
i18next.addResourceBundle('tr', 'examplePage', tr);
i18next.addResourceBundle('ar', 'examplePage', ar);

const Example = React.lazy(() => import('./Example'));

const ExampleConfig = {
  settings: {
    layout: {
      config: {},
    },
  },
  routes: [
    {
      path: 'example',
      element: <Example />,
    },
  ],
};

export default ExampleConfig;
