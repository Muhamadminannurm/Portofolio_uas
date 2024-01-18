import styled from "styled-components";
import _default from "../../themes/default";

// Komponen ikon media sosial
export const SocialMediaIcons = styled.div`
  display: flex;
  margin-top: 1.5rem; /* Meningkatkan sedikit margin untuk tampilan yang lebih nyaman */
`;

// Komponen ikon media sosial individual
export const SocialMediaIcon = styled.a`
  display: inline-block;
  margin: 0 1.5rem; /* Meningkatkan sedikit margin untuk tampilan yang lebih lapang */
  font-size: 1.8rem; /* Memberikan sentuhan lebih besar untuk menonjolkan ikon */
  color: ${({ theme }) => theme.text_primary};
  transition: color 0.3s ease-in-out;

  &:hover {
    color: ${({ theme }) => theme.primary};
    transform: scale(1.2); /* Efek zoom in ketika dihover */
  }
`;
