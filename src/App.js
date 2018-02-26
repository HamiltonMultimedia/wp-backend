import React, { Component } from 'react';
import { Text, View } from 'react-native';
import './App.css';

class App extends Component {
  constructor() {
    super();
    this.state = {
      projects: []
    };
  }
  componentDidMount() {
    let projectsURL = 'http://localhost:8888/wp-json/wp/v2/projects';
    fetch(projectsURL)
      .then(response => response.json())
      .then(response => {
        this.setState({
          projects: response
        });
      });
  }

  render() {
    let projects = this.state.projects.map((project, index) => {
      return (
        <div key={index}>
          <img
            src={
              project.better_featured_image.media_details.sizes.medium
                .source_url
            }
            alt={project.better_featured_image.alt_text}
          />
        </div>
      );
    });
    return (
      <View style={{ flex: 1, backgroundColor: 'blue' }}>
        <div className="App">
          <h1 className="App-title" style={{ color: 'white'}} >Projects</h1>
          {projects}
        </div>
      </View>
    );
  }
}

export default App;
