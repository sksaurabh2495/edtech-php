import React, { useState, useEffect } from 'react';
import axios from 'axios';

const TrackProgress = ({ userId, courseId }) => {
  const [progress, setProgress] = useState(null);

  useEffect(() => {
    // Fetch progress from the backend API
    axios.post('http://localhost:80/track_progress.php', { userId, courseId })
      .then(response => {
        setProgress(response.data);
      })
      .catch(error => {
        console.error('Error fetching progress:', error);
      });
  }, [userId, courseId]);

  return (
    <div>
      <h2>Track Progress</h2>
      {progress ? (
        <p>Progress: {progress}%</p>
      ) : (
        <p>No progress available</p>
      )}
    </div>
  );
};

export default TrackProgress;
