import React, { Component } from 'react';
import { View } from 'react-native';
import Layout from './components/Layout';
import './index.css';

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
        // <div key={index}>
        //   <img
        //     src={
        //       project.better_featured_image.media_details.sizes.medium
        //         .source_url
        //     }
        //     alt={project.better_featured_image.alt_text}
        //   />
        // </div>

        <Layout title="HMM Chat App" />
      );
    });
    return (
      <View style={{ flex:100 }}>
        <div className="container">
          {projects}
        </div>
      </View>
    );
  }
}

export default App;
