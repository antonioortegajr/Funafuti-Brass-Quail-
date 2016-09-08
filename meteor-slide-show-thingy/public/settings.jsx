import React from 'react';
import { Meteor } from 'meteor/meteor';
import { render } from 'react-dom';

import Set from 'settings.jsx';

Meteor.startup(() => {
  render(<Set />, document.getElementById('settings'));
});
